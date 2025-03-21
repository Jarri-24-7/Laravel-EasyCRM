<?php

namespace App\Http\Controllers;

use App\Helpers\Helper\Helper;
use App\Http\Requests\PaymentRequest;
use App\Models\Deposit;
use App\Models\Gateway;
use App\Models\Payment;
use App\Models\Plan;
use App\Services\Gateway\Gourl;
use App\Services\Gateway\Manual;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Models\Transaction;

class PaymentController extends Controller
{
    protected $payment;

    public function __construct(PaymentService $payment)
    {
        $this->payment = $payment;
    }

    public function gateways(Request $request, $id)
    {

        $data['plan'] = Plan::findOrFail($id);

        $data['gateways'] = Gateway::where('status', 1)->latest()->get();

        $data['title'] = "Payment Methods";

        return view(Helper::theme() . "user.gateway.gateways")->with($data);
    }

    public function paynow(PaymentRequest $request)
    {
        $isSuccess = $this->payment->payNow($request);

        if ($isSuccess['type'] === 'error') {
            return redirect()->back()->with('error', $isSuccess['message']);
        }
        return redirect()->to($isSuccess['message']);
    }

    public function gatewaysDetails($id)
    {
        $isSuccess = $this->payment->details($id);

        if ($isSuccess['type'] === 'error') {
            return redirect()->back()->with('error', $isSuccess['message']);
        }

        return view($isSuccess['view'])->with($isSuccess['data']);
    }

    public function gatewayRedirect(Request $request, $id)
    {
        
        $gateway = Gateway::where('status', 1)->findOrFail($id);
        
        if (session('type') == 'deposit') {
            $deposit = Deposit::where('trx', session('trx'))->firstOrFail();
        } else {

            $deposit = Payment::where('trx', session('trx'))->firstOrFail();
        }
        
        if ($gateway->type == 0) {
            $data = Manual::process($request, $gateway, $deposit->total, $deposit);
        } else {
            $class = 'App\Services\Gateway\\' . ucwords($gateway->name).'Service';

            if (strstr($gateway->name, 'gourl')) {
                $method = new Gourl;
            } else {
                $method = new $class;
            }

            $data = $method::process($request, $gateway, $deposit->total, $deposit);
        }

        if ($data['type'] === 'error') {
            return redirect()->back()->with('error', $data['message']);
        }


        if ($gateway->name == 'mercadopago') {
            return redirect()->to($data['message']);
        }

        

        if (strstr($gateway->name, 'gourl')) {
            return redirect()->to($data['data']);
        }
        
        if ($gateway->name == 'nowpayments') {

            return redirect()->to($data['data']->invoice_url);
        }
        
        if ($gateway->name == 'mollie') {

            return redirect()->to($data['redirect_url']);
        }

        if ($gateway->name == 'paghiper') {
            return redirect()->to($data['data']);
        }

        if ($gateway->name == 'coinpayments') {

            if (isset($data['result']['checkout_url'])) {

                return redirect()->to($data['result']['checkout_url']);
            }
        }

        if ($gateway->name == 'paypal') {

            $data = json_decode($data);

            return redirect()->to($data->links[1]->href);
        }
        if ($gateway->name == 'paytm') {

            return view(Helper::theme() . 'user.gateway.auto', compact('data'));
        }

        $is_manual = session('manual') != null && session('manual') == 'yes' ? 1 : 0;

        if ($is_manual) {
            return redirect()->route('user.dashboard')->with('success', 'Your Payment is Successfully Processing');
        }

        
        return redirect()->route('user.dashboard')->with('success', 'Your Payment is Successfully Recieved');
    }

    public function paymentSuccess(Request $request, $gateway)
    {
        $gateway = Gateway::where('name', $gateway)->first();

        $class = 'App\Services\Gateway\\' . ucwords($gateway->name).'Service';


        if (strstr($gateway->name, 'gourl')) {
            $method = new Gourl;
        } else {
            $method = new $class;
        }

        $isSuccess = $method::success($request);

        if ($isSuccess['type'] == 'error') {
            return redirect()->route('user.dashboard')->with('error', $isSuccess['message']);
        }

        return redirect()->route('user.dashboard')->with('success', $isSuccess['message']);
    }
    
public function createPaymentIntent(Request $request)
{
    // Validate the request
    $request->validate(['amount' => 'required|numeric|min:1']);

    $user = auth()->user(); // Ensure the user is authenticated

    $stripeSecretKey = 'sk_test_51MbO6FCeq2KpBKUOrgq5xLSqP9L14oiqju2M0NlgFxAvgqoLgzcIRvdlpD0p3Uod3oycKpk5OX9z5wNukosoVLg100vU6NWkix';

    if (!$stripeSecretKey) {
        return response()->json(['error' => 'Stripe secret key not configured'], 500);
    }

    Stripe::setApiKey($stripeSecretKey);

    try {
        // Create a PaymentIntent
        $paymentIntent = PaymentIntent::create([
            'amount' => $request->amount * 100, // Convert to cents
            'currency' => 'usd',
        ]);

        // Calculate charges (if applicable)
        $charge = 0.00; // Adjust as per your gateway settings
        $totalAmount = $request->amount + $charge;

        // Create a deposit entry
        $deposit = Deposit::create([
            'user_id' => $user->id,
            'gateway_id' => 1, // Replace with the correct gateway ID
            'trx' => uniqid('trx_'),
            'amount' => $request->amount,
            'rate' => 1, // Add the conversion rate if applicable
            'charge' => $charge,
            'total' => $totalAmount,
            'status' => 2, // 2 => Pending
            'type' => 1, // 1 => Automatic
        ]);

        // Log the transaction in the sp_transactions table
        $transaction = Transaction::create([
            'trx' => $deposit->trx,
            'amount' => $request->amount,
            'details' => 'Debit/Credit Card Payment',
            'charge' => $charge,
            'type' => '+', // '+' for deposit
            'user_id' => $user->id,
        ]);

        return response()->json([
            'client_secret' => $paymentIntent->client_secret,
            'deposit_id' => $deposit->id,
            'transaction_id' => $transaction->id,
        ]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}


    
}

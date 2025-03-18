<?php
namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Gateway;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class GlobalPayController extends Controller
{
    public function payment(Request $request)
    {
        $validatedData = $request->validate([
            'CardNum' => 'required|numeric|digits:16',
            'ExpMonth' => 'required|integer|between:1,12',
            'ExpYear' => 'required|integer|gte:' . date('Y'),
            'Amount' => 'required|numeric|min:0.01',
            'Currency' => 'required|string|max:3',
            'Member' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'PhoneNumber' => 'required|string|max:15',
            'BillingAddress1' => 'required|string|max:255',
            'BillingCity' => 'required|string|max:255',
            'BillingZipCode' => 'required|string|max:20',
            'BillingState' => 'required|string|max:50',
            'BillingCountry' => 'required|string|max:2',
            'CVV2' => 'required|string|max:3',
        ]);

        $CompanyNum = '9699022';
        $TransType = 0;
        $TypeCredit = 1;
        $CardNum = $validatedData['CardNum'];
        $ExpMonth = $validatedData['ExpMonth'];
        $ExpYear = $validatedData['ExpYear'];
        $Amount = $validatedData['Amount'];
        $Currency = $validatedData['Currency'];
        $Member = $validatedData['Member'];
        $Email = $validatedData['Email'];
        $PhoneNumber = $validatedData['PhoneNumber'];
        $BillingAddress1 = $validatedData['BillingAddress1'];
        $BillingCity = $validatedData['BillingCity'];
        $BillingZipCode = $validatedData['BillingZipCode'];
        $BillingState = $validatedData['BillingState'];
        $BillingCountry = $validatedData['BillingCountry'];
        $PersonalHashKey = 'Y2SEWNCDNR';
        $CVV2 = $validatedData['CVV2'];

        $signatureString = $CompanyNum . $TransType . $TypeCredit . $Amount . $Currency . $CardNum . $PersonalHashKey;
        $signature = hash('sha256', $signatureString, true);
        $Base64Signature = base64_encode($signature);
        $hash = urlencode($Base64Signature);

        $requestUrl = "https://process.globalpayapp.net/member/remote_charge.asp?" . http_build_query([
            'CompanyNum' => $CompanyNum,
            'TransType' => $TransType,
            'CardNum' => $CardNum,
            'ExpMonth' => $ExpMonth,
            'ExpYear' => $ExpYear,
            'Member' => $Member,
            'TypeCredit' => $TypeCredit,
            'Payments' => '1',
            'Amount' => $Amount,
            'Currency' => $Currency,
            'CVV2' => $CVV2,
            'Email' => $Email,
            'PhoneNumber' => $PhoneNumber,
            'BillingAddress1' => $BillingAddress1,
            'BillingCity' => $BillingCity,
            'BillingZipCode' => $BillingZipCode,
            'BillingState' => $BillingState,
            'BillingCountry' => $BillingCountry,
            'Comment' => 'Deposit',
            'RetURL' => route('user.globalpay.return',$request->gatewayId),
            'notification_url' => 'http://strongcapital.test/gateways/17/details',
            'signature' => $hash,
        ]);

        $response = Http::get($requestUrl);

        Log::info('Payment Gateway Request URL:', ['url' => $requestUrl]);
        Log::info('Payment Gateway Response:', ['response' => $response->body()]);

        parse_str($response->body(), $parsedData);

        if ($response->successful()) {
            if (isset($parsedData['D3Redirect']) && $parsedData['D3Redirect']) {
                $decodedRedirect = urldecode($parsedData['D3Redirect']);
                return redirect()->away($decodedRedirect);
            } else {
                Session::flash('error', $parsedData['ReplyDesc'] ?? 'Unknown Error');
                return redirect()->back();
            }
        } else {
            return response()->json([
                'error' => 'Transaction Failed',
                'details' => $parsedData['ReplyDesc'] ?? 'Unknown Error',
            ], 400);
        }
    }
    public function return($id,Request $request){
        $reply=$request->Reply;
        if($reply=='000'){
            $amount=$request->Amount;
            $trx=$request->TransID;
            $details='Deposit Successfull';

            $deposit=new Deposit();
            $deposit->user_id=auth()->user()->id;
            $deposit->gateway_id=$id;
            $deposit->trx=$trx;
            $deposit->amount=$amount;
            $deposit->charge=0;
            $deposit->rate=1;
            $deposit->total=$amount;
            $deposit->status=1;
            $deposit->type=1;
            $deposit->save();

            $transaction= new Transaction();
            $transaction->trx=$trx;
            $transaction->amount=$amount;
            $transaction->charge=0;
            $transaction->details=$details;
            $transaction->type='+';
            $transaction->user_id=auth()->user()->id;
            $transaction->save();
            Session::flash('success', 'Deposit Has Been Done Successfully!!');
            return redirect()->route('user.globalpay.deposit');
        }

        $replyDesc=$request->ReplyDesc;
        Session::flash('error',  $replyDesc);
        return redirect()->route('user.gateway.details',$id);

    }
}

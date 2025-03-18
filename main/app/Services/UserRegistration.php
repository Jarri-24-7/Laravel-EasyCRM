<?php

namespace App\Services;

use App\Helpers\Helper\Helper;
use App\Models\Configuration;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UserRegistration
{
    public function register($request)
    {
        $general = Configuration::first();

        $signupBonus = $general->signup_bonus;

        $referid = 0;

        if ($request->reffered_by) {
            $referUser = User::where('username', $request->reffered_by)->first();

            $referid = $referUser->id;

            if (!$referUser) {
                return ['type' => 'error', 'message' => 'No User Found Assocciated with this reffer Name'];
            }
        }

        // Create the user in your application
        event(new Registered($user = $this->create($request, $signupBonus, $referid)));

        Auth::login($user);

        if ($request->reffered_by) {
            Helper::referMoney($user->id, $referUser, 'interest', 0);
        }

        // Call external API to register the user on the second website
        $apiResponse = $this->registerOnSecondWebsite($user, $request->password);

        if ($apiResponse['type'] === 'error') {
            return ['type' => 'error', 'message' => $apiResponse['message']];
        }

        return ['type' => 'success', 'message' => 'Successfully Registered'];
    }

    public function create($request, $signupBonus, $referid)
    {
        return User::create([
            'balance' => $signupBonus,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 1,
            'password' => bcrypt($request->password),
            'ref_id' => $referid ?? ''
        ]);
    }

    public function registerOnSecondWebsite($user, $password)
    {
        $apiUrl = "https://restapi-real.sirixtrader.com/api/UserActions/CreateUser";
    
        $bearerToken = "t1_oLGwFzOK65kJy5AUKTOWfi4%3d";
    
        // Prepare payload for the API
        $payload = [
            "GroupName" => "TI Default USD",
            "UserDetails" => [
                "FullName" => $user->username,
                "Email" => $user->email,
            ],
            "Passwords" => [
                "Password" => $password,
            ],
        ];
    
        try {
            
        
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $bearerToken,
            ])->post($apiUrl, $payload);
        
            
        
            if ($response->successful()) {
                $responseData = $response->json();
                $userId = $responseData['User']['UserID'] ?? null;
        
                if ($userId) {
                    
                    $this->sendCredentialsEmail($user, $userId, $password);
                    return ['type' => 'success', 'message' => 'User registered on second website and email sent.'];
                }
        
               
                return ['type' => 'error', 'message' => 'User registered but unable to fetch User ID.'];
            }
        
           
            return ['type' => 'error', 'message' => 'Failed to register on second website: ' . $response->body()];
        } catch (\Exception $e) {
            return ['type' => 'error', 'message' => 'Error registering on second website: ' . $e->getMessage()];
        }
    }
    
    private function sendCredentialsEmail($user, $userId, $password)
    {
        $emailData = [
            'fullName' => $user->username,
            'userId' => $userId,
            'password' => $password,
            'webTraderUrl' => 'https://app.strongcapitals.com/',
        ];
    
        try {
            \Mail::send('emails.credentials', $emailData, function ($message) use ($user) {
                $message->to($user->email)
                    ->subject('Your Web Trader Login Credentials');
            });
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
        }
    }
    
    
}
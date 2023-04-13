<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class DarajaController extends Controller
{
    public function index(Request $request)
    {
        $client = new Client();
        
        $response = $client->request('POST', 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials', [
            'auth' => [env('DARAJA_CONSUMER_KEY'), env('DARAJA_CONSUMER_SECRET')]
        ]);
        
        $token = json_decode((string) $response->getBody(), true)['access_token'];
        
        $response = $client->request('POST', 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type' => 'application/json',
                'Cache-Control' => 'no-cache',
            ],
            'json' => [
                'BusinessShortCode' => env('DARAJA_SHORTCODE'),
                'Password' => base64_encode(env('DARAJA_SHORTCODE') . env('DARAJA_PASSKEY') . date('YmdHis')),
                'Timestamp' => date('YmdHis'),
                'TransactionType' => 'CustomerPayBillOnline',
                'Amount' => $request->input('amount'),
                'PartyA' => $request->input('phone_number'),
                'PartyB' => env('DARAJA_SHORTCODE'),
                'PhoneNumber' => $request->input('phone_number'),
                'CallBackURL' => url('/daraja/callback'),
                'AccountReference' => 'Test Payment',
                'TransactionDesc' => 'Test Payment Description',
            ],
        ]);
        
        return $response->getBody();
    }
    
    public function callback(Request $request)
    {
        // Handle the callback
    }
}

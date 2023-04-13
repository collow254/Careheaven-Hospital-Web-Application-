<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use GuzzleHttp\Client;

class DarajaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
{
    $this->app->singleton(Client::class, function () {
        return new Client([
            'base_uri' => 'https://api.safaricom.co.ke/',
            'headers' => [
                'Authorization' => 'Bearer ' . env('DARAJA_ACCESS_TOKEN'),
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
    });
}


public function makePayment()
{
    $client = app(Client::class);

    $response = $client->post('mpesa/stkpush/v1/processrequest', [
        'json' => [
            'BusinessShortCode' => '123456',
            'Password' => '...',
            'Timestamp' => '...',
            // etc.
        ],
    ]);

    $result = json_decode($response->getBody()->getContents());

    // do something with the response
}

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

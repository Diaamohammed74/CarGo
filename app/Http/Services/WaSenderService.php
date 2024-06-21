<?php

namespace App\Http\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class WaSenderService
{
    protected $baseUrl;
    protected $appKey;
    protected $authKey;
    protected $templateId;

    public function __construct()
    {
        $this->baseUrl = 'https://wainstantsender.xyz/api/create-message';
        $this->appKey  = 'b5a4f8a4-c94e-4720-8b87-93c8ee82f2b7';
        $this->authKey = 'LsqCFJekZJfwZYiYsMGhDSrkzWfkb6GNl1Vr0Qyz893mz8ZH9l';
    }

    public function sendMessage($to,$message)
    {
        $client   = new Client();
        $response = $client->post($this->baseUrl, [
            'form_params' => [
                'appkey'  => $this->appKey,
                'authkey' => $this->authKey,
                'to'      => $to,
                'message' => $message,
                'sandbox' => 'true',
            ],
            'curl' => [
                CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_3,   // Use the appropriate SSL version
            ],
        ]);
        return $response;
    }
}

<?php

namespace App\Http\Controllers;

use Google\Client;
use Illuminate\Http\Request;

class GoogleOAuthController extends Controller
{
    public function index(Request $request)
    {
        /** @var Client $client */
        $client = new Client();
        $clientSecretJson = file(base_path('client_secret.json'))[0];
        dd($clientSecretJson);
        $client->setAuthConfig($clientSecretJson);
        $client->addScope(\Google_Service_YouTube::YOUTUBE_FORCE_SSL);

        if($accessToken = $request->session()->get('access_token')){
            $client->setAccessToken($accessToken);
            $youtube = new \Google_Service_YouTube($client);

        }
    }

    public function OAuthCallback()
    {

    }

}

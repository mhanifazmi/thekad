<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SpotifyController extends Controller
{
    public function index()
    {
        // Spotify App credentials
        $client_id = env('SPOTIFY_CLIENT_ID');
        $client_secret = env('SPOTIFY_CLIENT_SECRET');
        $redirect_uri = env('SPOTIFY_REDIRECT_URL');
        $scope = "streaming";

        // Redirect the user to Spotify's authorization page
        $auth_url = 'https://accounts.spotify.com/authorize?' .
            'client_id=' . $client_id .
            '&response_type=code' .
            '&redirect_uri=' . urlencode($redirect_uri) .
            '&scope=streaming';

        return redirect($auth_url);
    }

    public function callback(Request $request)
    {
        $client_id = env('SPOTIFY_CLIENT_ID');
        $client_secret = env('SPOTIFY_CLIENT_SECRET');
        $redirect_uri = env('SPOTIFY_REDIRECT_URL');

        // Check if the request has an authorization code
        if ($request->has('code')) {
            // Obtain the authorization code from the request
            $authorizationCode = $request->input('code');

            // Exchange the authorization code for an access token
            $client = new Client();
            $response = $client->post('https://accounts.spotify.com/api/token', [
                'form_params' => [
                    'grant_type' => 'authorization_code',
                    'code' => $authorizationCode,
                    'redirect_uri' => $redirect_uri,
                ],
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode("$client_id:$client_secret"),
                ],
            ]);

            $tokenData = json_decode($response->getBody(), true);
            $accessToken = $tokenData['access_token'];

            echo $accessToken;
        } else {
            // Handle the case where there is no authorization code
            return redirect('/login')->with('error', 'Authorization failed.');
        }
    }
}

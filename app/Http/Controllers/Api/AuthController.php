<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Http\Request;
use Laravel\Passport\Token;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $http = new Client;

        try {
            $response = $http->post(route(env('OAUTH_TOKEN_URL')), [
                'form_params' => [
                    'grant_type' => env('OAUTH_TOKEN_GRANT_TYPE'),
                    'client_id' => env('OAUTH_TOKEN_CLIENT_ID'),
                    'client_secret' => env('OAUTH_TOKEN_CLIENT_SECRET'),
                    'username' => $request->username,
                    'password' => $request->password
                ]
            ]);
            return $response->getBody();
        } catch (BadResponseException $e) {
            dd($e->getMessage());
            if ($e->getCode() === 400) {
                return response()->json(__('api.login.invalid_request'), $e->getCode());
            } elseif ($e->getCode() === 401) {
                return response()->json(__('api.login.incorrect_credentials'), $e->getCode());
            }

            return response()->json(__('api.login.default_error'), $e->getCode());
        }
    }

    public function logout()
    {
        auth('api')->user()->tokens->each(function (Token $token) {
            $token->delete();
        });

        return response()->json(__('api.logout'), 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Ixudra\Curl\Facades\Curl;
use \GuzzleHttp\Exception\GuzzleException;

class UserController extends Controller
{
    
    public function login(){
        if (Auth::attempt(['email' => 'kennedyps1@gmail.com', 'password' => '123456'])) {
            $http = new \GuzzleHttp\Client;

                $response = $http->post('http://localhost:2000/oauth/token', [
                    'form_params' => [
                        'grant_type' =>'password',
                        'client_id' =>2,
                        'client_secret' =>'TTVtkvhfiSUaOd3rEk4One7zzAfuhCAbI40WZmje',
                        'username' =>'kennedyps1@gmail.com',
                        'password' =>123456,
                        'scope' => '',
                    ],
                ]);

                return  $response->getBody();
        }
    }
}

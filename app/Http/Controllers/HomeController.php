<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){
    
        $apiKey = '563492ad6f9170000100000105ca3b74cb85411ea9e6d007dac401e3';

        $response = Http::withToken($apiKey)->post('https://api.pexels.com/v1/collections');
        print_r($response);
    }
}
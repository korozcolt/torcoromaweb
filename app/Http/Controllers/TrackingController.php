<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrackingController extends Controller
{
    public function index(){
        // http request api get tracking with user and password on ENV file
        $client = Http::get(env('SOAP_SERVICE_LOCATION'), [
            'sLogin' => env('SOAP_SERVICE_USER'),
            'sPassword' => env('SOAP_SERVICE_PASSWORD'),
        ]);

        return response()->json($client);
    }
}
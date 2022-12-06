<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use SoapClient;
use Illuminate\Support\Facades\Mail;
use App\Mail\SupportMail;

class SupportController extends Controller
{
    public function index(){
//        $client = new Client(); //GuzzleHttp\Client
//        $params = [
//            'sLogin' => 'torcoroma',
//            'sPassword' => 'IUzZXp3" tR=S=ep9p~c|'
//        ];
//        $headers= [
//            'Content-Type' => 'application/x-www-form-urlencoded'
//        ];
//        $response = $client->request('post', $url, [
//            'verify'  => false,
//            'params' => $params,
//            'headers' => $headers
//        ]);
//        $responseBody = json_decode($response->getBody());
//        dd($responseBody);
        /*$url = "https://web1ws.shareservice.co/wsHistoryGetByPlate.asmx?op=HistoyDataLastLocationByUser_JSON";
        $params = array(
            'sLogin' => 'torcoroma',
            'sPassword' => 'IUzZXp3"tR=S=ep9p~c|'
        );
        try {

            $opts = array(
                'http' => array(
                    'header' => 'Authorization: Bearer '.json_decode($token->result),
                    'user_agent' => 'PHPSoapClient'
                )
            );
            $context = stream_context_create($opts);
            $soapClientOptions = array(
                'stream_context' => $context,
                'cache_wsdl' => WSDL_CACHE_NONE
            );
            $client = new SoapClient($url, $soapClientOptions);
            $token = $client->integrationAdminTokenServiceV1CreateAdminAccessToken($params);
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }

        dd($client);*/
        return view('api');
    }

    public function sendMail(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => 'numeric',
            'subject' => 'required'
        ]);

        Support::create($request->all());
        $details = [
            'title' => $request->get('subject'),
            'body'  => $request->get('message')
        ];

        Mail::to($request->get('email'))->send(new SupportMail($details));

        return redirect('/contact')->with('success', 'Gracias por contactarnos!');
    }
}
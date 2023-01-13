<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function __invoke($page)
    {
        $maps = [];
        $metaTitle = __('Meta Title: ' . $page);
        if($metaTitle == 'Meta Title: ' . $page){
            $metaTitle = NULL;
        }
        
        if($page == 'service'){
            $client = Http::get(env('SOAP_SERVICE_LOCATION'), [
                'sLogin' => env('SOAP_SERVICE_USER'),
                'sPassword' => env('SOAP_SERVICE_PASSWORD'),
            ]);
    
            $maps = $client->json();
        }
        
        return view('pages.'.$page,['info' => $this->pageInfo(),'metaTitle' => $metaTitle, 'maps' => $maps]);
    }

    public function index(){
        return redirect()->route('page',['page' => '_home']);
    }

    public function pageInfo(){
        return Page::first();
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class HomeController extends Controller
{

    public function __invoke($page)
    {
        $metaTitle = __('Meta Title: ' . $page);
        if($metaTitle == 'Meta Title: ' . $page){
            $metaTitle = NULL;
        }
        
        return view('pages.'.$page,['info' => $this->pageInfo(),'metaTitle' => $metaTitle]);
    }

    public function index(){
        return view('pages.home', ['info' => $this->pageInfo(),'metaTitle' => 'Meta Title: home']);
    }

    public function pageInfo(){
        return Page::first();
    }

}
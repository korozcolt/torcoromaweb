<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class HomeController extends Controller
{
    
    public function index(){
        return view('welcome', ['info' => $this->pageInfo()]);
    }

    public function contact(){
        return view('contact', ['info' => $this->pageInfo()]);
    }

    public function faq(){
        return view('faq', ['info' => $this->pageInfo()]);
    }

    public function about(){
        return view('about', ['info' => $this->pageInfo()]);
    }

    public function pageInfo(){
        return Page::first();
    }

}

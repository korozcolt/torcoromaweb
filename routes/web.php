<?php

use App\Http\Livewire\ChatForm;
use App\Http\Livewire\SupportForm;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Support;

//--------------------* PAGES ROUTES *-------------------------------//
Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home.page');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact.page');

    Route::get('/faq', function () {
        return view('faq');
    })->name('faq.page');

    Route::get('/about', function () {
        return view('about');
    })->name('about.page');

    Route::post('/contact/send-message',function (Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        create($request->all());
        return back()->with('success', 'Thanks for contacting us!');
    })->name('contactus.send');
});

//--------------------* ADMIN ROUTES *-------------------------------//
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/support-form', SupportForm::class)->name('support.admin');
    Route::get('/chat-form', ChatForm::class)->name('chat.admin');
});


Addchat::routes();

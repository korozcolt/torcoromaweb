<?php

use App\Http\Livewire\ChatForm;
use App\Http\Livewire\SupportForm;
use Illuminate\Support\Facades\Route;

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
});

//--------------------* ADMIN ROUTES *-------------------------------//
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/support-form', SupportForm::class)->name('support.admin');
    Route::get('/chat-form', ChatForm::class)->name('chat.admin');
});

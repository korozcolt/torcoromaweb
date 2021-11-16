<?php

use App\Http\Controllers\SupportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingPageController;
use App\Http\Livewire\ChatForm;
use App\Http\Livewire\SupportForm;
use Illuminate\Support\Facades\Route;

//--------------------* PAGES ROUTES *-------------------------------//
Route::prefix('/')->group(function () {
    // ------------------------------* PAGE STATIC *---------------------------- //
    Route::get('/',[HomeController::class,'index'] )->name('home.page');
    Route::get('/contact', [HomeController::class,'contact'])->name('contact.page');
    Route::get('/faq', [HomeController::class,'faq'])->name('faq.page');
    Route::get('/about', [HomeController::class,'about'])->name('about.page');
    Route::get('/policy', [HomeController::class,'policy'])->name('policy.page');
    Route::get('/service', [HomeController::class,'service'])->name('service.page');

    // ------------------------------* SEND MAIL TICKETS *---------------------------- //
    Route::post('/contact/send-message',[SupportController::class,'sendMail'])->name('contactus.send');
    Route::get('/api/test', [SupportController::class,'index'])->name('api.page');
});

//--------------------* ADMIN ROUTES *-------------------------------//
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/page-settings',[SettingPageController::class,'index'])->name('settings.admin');
    Route::put('/page-update/{id}',[SettingPageController::class,'update'])->name('settings.update');
    Route::get('/support-form', SupportForm::class)->name('support.admin');
    Route::get('/chat-form', ChatForm::class)->name('chat.admin');
});

Addchat::routes();

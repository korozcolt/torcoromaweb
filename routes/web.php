<?php

use App\Http\Controllers\SupportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingPageController;
use App\Http\Livewire\SupportForm;
use App\Http\Controllers\BotManController;
use Illuminate\Support\Facades\Route;


//--------------* PAGES ROUTES *-----------------//
Route::prefix('/')->group(function () {
    // ---------* PAGE STATIC *----------------- //
    Route::get('/',[HomeController::class,'index'])->name('page.home');
    // ---------* PAGE DYNAMIC *---------------- //
    Route::get('/{page}', HomeController::class)->name('page')->where('page','about|faq|contact|home|service|api|policy');
    // ---------* SEND MAIL TICKETS *---------- //
    Route::post('/contact/send-message',[SupportController::class,'sendMail'])->name('contactus.send');
    Route::get('/api/test', [SupportController::class,'index'])->name('api.page');
});

//------------* ADMIN ROUTES *----------------//
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [SettingPageController::class, 'dashboard'])->name('dashboard');
    Route::get('/page-settings',[SettingPageController::class,'index'])->name('settings.admin');
    Route::put('/page-update/{id}',[SettingPageController::class,'update'])->name('settings.update');
    Route::post('/page-create',[SettingPageController::class,'store'])->name('settings.store');
    Route::resource('support', SupportController::class);
});

Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);
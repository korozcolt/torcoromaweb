<?php

use App\Http\Controllers\SupportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingPageController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\TrackingController;

use Illuminate\Support\Facades\Route;


//--------------* PAGES ROUTES *-----------------//
Route::prefix('/')->group(function () {
    // ---------* PAGE STATIC *----------------- //
    Route::get('/',[HomeController::class,'index'])->name('page._home');
    // ---------* PAGE DYNAMIC *---------------- //
    Route::get('/{page}', HomeController::class)->name('page')->where('page','about|faq|contact|_home|service|api|policy');
    // ---------* SEND MAIL TICKETS *---------- //
    Route::post('/contact/send-message',[SupportController::class,'sendMail'])->name('contactus.send');
    Route::get('/api/test', [SupportController::class,'index'])->name('api.page');
    Route::resource('support', SupportController::class)->except(['create','show']);
});

//--------------* ADMIN ROUTES *----------------//
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [SettingPageController::class, 'dashboard'])->name('dashboard');
    Route::get('/page-settings',[SettingPageController::class,'index'])->name('settings.admin');
    Route::put('/page-update/{page}',[SettingPageController::class,'update'])->name('settings.update');
    Route::post('/page-create',[SettingPageController::class,'store'])->name('settings.store');
    Route::resource('chatbot', ChatbotController::class)->except(['show']);

});
Route::get('/tracking', [TrackingController::class, 'index'])->name('tracking');
Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);

//using SupportController the method verifyStatus to get the status of the ticket
Route::get('/support/{id}/verify', [SupportController::class, 'verifyStatus'])->name('support.verify');

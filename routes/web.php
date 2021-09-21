<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


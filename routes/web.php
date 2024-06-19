<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about-us', function () {
    return view('partials.about-us');
})->name('about.us');

Route::get('/contact-us', function () {
    return view('partials.contact-us');
})->name('contact.us');

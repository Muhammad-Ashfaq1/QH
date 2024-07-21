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

Route::get('/products', function () {
    return view('partials.products');
})->name('products');

Route::get('/products/consumer', function () {
    return view('partials.products-consumer');
})->name('consumer');
Route::get('/products/professional', function () {
    return view('partials.products-professional');
})->name('professional');

Route::get('/products-list', function () {
    return view('partials.products-list');
})->name('products-list');

Route::get('/single-product', function () {
    return view('partials.single-product');
})->name('single-product');
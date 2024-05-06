<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portfolio', function () {
    return view('portfolio.portfolio');
})->name('portfolio');

Route::get('/portfolio/coden', function () {
    return view('portfolio.coden');
});
Route::get('/portfolio/cassie-hub', function () {
    return view('portfolio.cassie-hub');
});

Route::get('/solutions', function () {
    return view('solutions');
})->name('solutions');

Route::get('/about', function () {
    return view('about');
})->name('about_us');

Route::get('/contact', function () {
    return view('contact');
})->name('contact_us');
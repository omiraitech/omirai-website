<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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


Route::get('{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    
    return redirect()->back();
});

 $locale = App::currentLocale();
// $route = "/".$locale;
// Route::redirect('/', $route);
// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::prefix($locale)->group(function () {
    
    Route::get('/services', function () {
        return view('services');
    })->name('services')
    ;
    
    Route::get('/portfolio', function () {
        return view('portfolio.portfolio');
    })->name('portfolio');
    
    Route::get('/portfolio/coden', function () {
        return view('portfolio.coden');
    })->name('coden_portfolio');

    Route::get('/portfolio/cassie-hub', function () {
        return view('portfolio.cassie-hub');
    })->name('cassie-hub_portfolio');
    
    Route::get('/solutions', function () {
        return view('solutions');
    })->name('solutions');
    
    Route::get('/about', function () {
        return view('about');
    })->name('about_us');
    
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact_us');
   
});







// Route::get('{locale}', function ($locale) {
//     app()->setLocale($locale);
//     session()->put('locale', $locale);
//     return redirect()->back();
// });


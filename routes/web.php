<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about/who-we-are', function () {
    return view('about-us');
})->name('about.about-us');

Route::get('/about/our-history', function () {
    return view('history');
})->name('about.our-history');

Route::get('/about/careers', function () {
    return view('careers');
})->name('about.careers');

Route::get('/contact/get-quote', function () {
    return view('contact');
})->name('get-quote');

Route::get('/services', function(){
    return redirect()->route('services.container-homes');
})->name('services.home');

Route::get('/services/container-homes', function () {
    return view('container-homes');
})->name('services.container-homes');

Route::get('/services/container-sales', function () {
    return view('container-sales');
})->name('services.container-sales');

Route::get('/services/consultation', function () {
    return view('consultation');
})->name('services.consultation');

Route::post('/contact', [QuoteController::class, 'store'])->name('contact.quote');
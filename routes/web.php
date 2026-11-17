
<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// CONTACT PAGE - MEMBER 3
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

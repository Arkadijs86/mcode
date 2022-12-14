<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');;

Route::get('/about', function () {
    return view('about');
})->name('about');;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');;

Route::get('/faq', function () {
    return view('faq');
})->name('faq');;

Route::get('/sign-up', function () {
    return view('sign-up');
})->name('sign-up');;

Route::post('/sign-up/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');

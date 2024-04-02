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
    return view('main.hause');
})->name('home');

Route::get('/contact', function () {
    return view('main.contact');
})->name('contact');

Route::get('/menu', function () {
    return view('main.menu');
})->name('menu');

Route::get('/book', function () {
    return view('main.book');
})->name('book');

Route::get('/about', function () {
    return view('main.about');
})->name('book');
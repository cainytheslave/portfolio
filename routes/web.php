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

Route::get('/angebot', function () {
    return view('pricing');
})->name('pricing');

Route::get('/ueber-uns', function () {
    return view('home');
})->name('about');

Route::get('/blog', function () {
    return view('home');
})->name('blog');

Route::get('/impressum', function () {
    return view('imprint');
})->name('imprint');

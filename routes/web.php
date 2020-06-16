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

Route::get('', function () {
    return view('home');
})->name('home');

Route::get('vereniging', function () {
    return view('vereniging');
})->name('vereniging');

Route::get('lid-worden', function () {
    return view('lid-worden');
})->name('lid-worden');

Route::get('competitie', function () {
    return view('competitie');
})->name('competitie');

Route::get('agenda', function () {
    return view('agenda');
})->name('agenda');

Route::get('nieuws', function () {
    return view('nieuws');
})->name('nieuws');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

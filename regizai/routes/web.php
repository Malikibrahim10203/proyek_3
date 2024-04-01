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
});

Route::get('/biodata', function() {
    return view('biodata');
});

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/bookfood', function() {
    return view('bookfood');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/calculator', function() {
    return view('calculator');
});

Route::get('/signup', function() {
    return view('signup');
});




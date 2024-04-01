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



Route::get('/', 'App\Http\Controllers\LoginController@login')->name('login');

Route::post('/actionlogin', 'App\Http\Controllers\LoginController@actionLogin');

Route::get('/logout', 'App\Http\Controllers\LoginController@actionLogout');

Route::get('/login', function() {
    return view('login');
});

<<<<<<< HEAD

Route::group(['middleware' => ['auth']], function()
{
    Route::get('/biodata', function() {
        return view('biodata');
    });
    
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
    
    Route::get('/bookfood', function() {
        return view('bookfood');
    });
});
=======
Route::get('/calculator', function() {
    return view('calculator');
});

Route::get('/signup', function() {
    return view('signup');
});



>>>>>>> origin/firgiansyah

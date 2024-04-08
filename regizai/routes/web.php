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

Route::post('/choosegender', 'App\Http\Controllers\RegisterController@gender');
Route::post('/biodata', 'App\Http\Controllers\RegisterController@biodata');

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/signup', 'App\Http\Controllers\RegisterController@register');
Route::post('/actionsignup', 'App\Http\Controllers\RegisterController@actionRegister');

Route::get('/choosegender', 'App\Http\Controllers\RegisterController@gender')->name('choosegender');
Route::get('/biodata', 'App\Http\Controllers\RegisterController@biodata')->name('biodata');

Route::post('/choosegender', 'App\Http\Controllers\RegisterController@gender');
Route::post('/biodata', 'App\Http\Controllers\RegisterController@biodata');



Route::group(['middleware' => ['auth']], function()
{

    Route::get('/profile', function(){
        return view('profile');
    });

    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

    Route::get('/bookfood', function() {
        return view('bookfood');
    });

    Route::get('/calculator', function() {
        return view('calculator');
    });

    Route::get('/catatan', function() {
        return view('catatan');
    });

    Route::get('/hasil-analisis', function(){
        return view('hasil');
    });

});

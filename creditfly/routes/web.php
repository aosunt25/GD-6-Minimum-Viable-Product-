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
    return view('index');
});

//Credit Cards routes
Route::resource('creditcard', 'App\Http\Controllers\CreditCardController');



// Auth routes 

Route::get('register', 'App\Http\Controllers\AuthController@register')->name('auth.register');
Route::post('register', 'App\Http\Controllers\AuthController@doRegister')->name('auth.do-register');
Route::get('login', 'App\Http\Controllers\AuthController@login')->name('auth.login');
Route::post('login', 'App\Http\Controllers\AuthController@doLogin')->name('auth.do-login');
Route::any('logout', 'App\Http\Controllers\AuthController@logout')->name('auth.logout');
Route::get('show', 'App\Http\Controllers\AuthController@show')->name('auth.show');
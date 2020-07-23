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



Auth::routes();

Route::get('/', 'HomeController@home')->name('home');
Route::get('/check_username', 'HomeController@check_username')->name('check_username');

Route::get('/redirect-login-facebook', 'Auth\LoginController@redirect_login')->name('login_face');
Route::get('/callback-facebook', 'Auth\LoginController@callback_login');


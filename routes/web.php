<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'locale'], function () {

    Route::get('/posts', 'PostController@index')->name('posts.list');
    Route::get('change-language/{language}', 'LanguageController@changeLanguage')->name('user.change-language');
    Route::get('/', function () {
        return view('welcome');
    });
    Auth::routes();
    Route::group(["middleware" => "auth"], function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/posts/create', 'PostController@create')->name('posts.create');
        Route::post('/posts/create', 'PostController@store')->name('posts.store');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
});

Route::get('articles', function () {
        return view('articles.index', ['articles' => $articles]);
});

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
Route::get('guest', 'Auth\LoginController@authenticate')->name('login.guest');

Route::resource('articles', 'ArticlesController');
Route::resource('users', 'UserController');

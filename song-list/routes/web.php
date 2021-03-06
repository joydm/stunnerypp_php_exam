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



Auth::routes();
Route::get('/logout', function () {
	Auth::logout();
    return redirect('/');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index');

Route::resource('lyrics', 'LyricController');

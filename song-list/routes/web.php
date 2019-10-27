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



// Route::get('/demo', function () {
//    return view('demo');
// });

Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/', 'ListController@show');

Auth::routes();
Route::get('/logout', function () {
	Auth::logout();
    return redirect('/');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('lyrics', 'LyricController');
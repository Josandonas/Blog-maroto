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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/poslog', function () {
    return view('poslog');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

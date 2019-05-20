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
});
Route::get('about2', function () {
    return view('about2');
});

Route::get('/poslog', 'PosLogController@index')->name('poslog');

Route::get('/contato', 'ContatoController@index')->name('contato');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/home', 'HomeController@index')->name('home');

Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');

Auth::routes();

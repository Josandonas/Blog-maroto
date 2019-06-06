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
// função show do laravel para ver somente uma postagem

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'PosLogController@inicio');

Route::get('about2', function () {

    return view('about2');
});

Auth::routes(['verify'=>true]);

Route::get('/poslog', 'PosLogController@index')->name('poslog');

Route::get('/contato', 'ContatoController@index')->name('contato');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/chat', 'ChatsController@index')->name('chat');

Route::post('/publicar', 'PostagensController@store')->name('publicar');

Route::post('/comentar', 'ComentariosController@store')->name('comentar');

Route::get('/apagarpostagem/{id}','PostagensController@destroy');

Route::get('/apagarcomentario/{id}','ComentariosController@destroy');

Route::get('/postaqui/{id}','PostaAquiController@show');

Route::get('/postaaqui','PostaAquiController@index')->name('postaaqui');

Route::post('/mensagemEmail', 'ChatsController@enviarEmail');

Route::get('/mensagem', 'ChatsController@mensagem');

Route::match(['get', 'post'], '/botman', 'BotManController@handle');


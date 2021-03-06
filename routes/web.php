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

route::get('/', 'App\Http\Controllers\PesquisaController@index')->name('pesquisa.index');

route::post('/form', 'App\Http\Controllers\PesquisaController@formenviado')->name('pesquisa.form');

//atores
route::get('/atores', 'App\Http\Controllers\AtoresController@index')->name('atores.index');

route::get('/atores/{id}/show', 'App\Http\Controllers\AtoresController@show')->name('atores.show');

route::get('/atores/create', 'App\Http\Controllers\AtoresController@create')->name('atores.create')->middleware('auth');;

route::post('/atores', 'App\Http\Controllers\AtoresController@store')->name('atores.store')->middleware('auth');;

route::get('/atores/{id}/edit', 'App\Http\Controllers\AtoresController@edit')->name('atores.edit')->middleware('auth');;

route::patch('/atores/{id}', 'App\Http\Controllers\AtoresController@update')->name('atores.update')->middleware('auth');;

route::get('/atores/{id}/delete', 'App\Http\Controllers\AtoresController@delete')->name('atores.delete')->middleware('auth');;

route::delete('/atores/{id}', 'App\Http\Controllers\AtoresController@destroy')->name('atores.destroy');

//filmes
route::get('/filmes', 'App\Http\Controllers\FilmesController@index')->name('filmes.index');

route::get('/filmes/{id}/show', 'App\Http\Controllers\FilmesController@show')->name('filmes.show');

route::get('/filmes/create', 'App\Http\Controllers\FilmesController@create')->name('filmes.create')->middleware('auth');;

route::post('/filmes', 'App\Http\Controllers\FilmesController@store')->name('filmes.store')->middleware('auth');;

route::get('/filmes/{id}/edit', 'App\Http\Controllers\FilmesController@edit')->name('filmes.edit')->middleware('auth');;

route::patch('/filmes/{id}', 'App\Http\Controllers\FilmesController@update')->name('filmes.update')->middleware('auth');;

route::get('/filmes/{id}/delete', 'App\Http\Controllers\FilmesController@delete')->name('filmes.delete')->middleware('auth');;

route::delete('/filmes/{id}', 'App\Http\Controllers\FilmesController@destroy')->name('filmes.destroy');


//generos
route::get('/generos', 'App\Http\Controllers\GenerosController@index')->name('generos.index');

route::get('/generos/{id}/show', 'App\Http\Controllers\GenerosController@show')->name('generos.show');

route::get('/generos/create', 'App\Http\Controllers\GenerosController@create')->name('generos.create')->middleware('auth');;

route::post('/generos', 'App\Http\Controllers\GenerosController@store')->name('generos.store')->middleware('auth');;

route::get('/generos/{id}/edit', 'App\Http\Controllers\GenerosController@edit')->name('generos.edit')->middleware('auth');;

route::patch('/generos/{id}', 'App\Http\Controllers\GenerosController@update')->name('generos.update')->middleware('auth');;

route::get('/generos/{id}/delete', 'App\Http\Controllers\GenerosController@delete')->name('generos.delete')->middleware('auth');;

route::delete('/generos/{id}', 'App\Http\Controllers\GenerosController@destroy')->name('generos.destroy');


//autenticacao

//autenticacao
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/comentario','App\Http\Controllers\LivrosController@comentarios')
    ->name('comentarios.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

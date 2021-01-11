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

route::get('/', 'App\Http\Controllers\AtoresController@index')->name('Atores.index');

route::post('/form', 'App\Http\Controllers\PesquisaController@formenviado')->name('pesquisa.form');

//atores
route::get('/atores', 'App\Http\Controllers\AtoresController@index')->name('atores.index');

route::get('/atores/{id}/show', 'App\Http\Controllers\AtoresController@show')->name('atores.show');

route::get('/atores/create', 'App\Http\Controllers\AtoresController@create')->name('atores.create');

route::post('/atores', 'App\Http\Controllers\AtoresController@store')->name('atores.store');

route::get('/atores/{id}/edit', 'App\Http\Controllers\AtoresController@edit')->name('atores.edit');

route::patch('/atores/{id}', 'App\Http\Controllers\AtoresController@update')->name('atores.update');

route::get('/atores/{id}/delete', 'App\Http\Controllers\AtoresController@delete')->name('atores.delete');

route::delete('/atores/{id}', 'App\Http\Controllers\AtoresController@destroy')->name('atores.destroy');

//filmes
route::get('/filmes', 'App\Http\Controllers\FilmesController@index')->name('filmes.index');

route::get('/filmes/{id}/show', 'App\Http\Controllers\FilmesController@show')->name('filmes.show');

route::get('/filmes/create', 'App\Http\Controllers\FilmesController@create')->name('filmes.create');

route::post('/filmes', 'App\Http\Controllers\FilmesController@store')->name('filmes.store');

route::get('/filmes/{id}/edit', 'App\Http\Controllers\FilmesController@edit')->name('filmes.edit');

route::patch('/filmes/{id}', 'App\Http\Controllers\FilmesController@update')->name('filmes.update');

route::get('/filmes/{id}/delete', 'App\Http\Controllers\FilmesController@delete')->name('filmes.delete');

route::delete('/filmes/{id}', 'App\Http\Controllers\FilmesController@destroy')->name('filmes.destroy');


//generos
route::get('/generos', 'App\Http\Controllers\GenerosController@index')->name('Genero.index');

route::get('/generos/{numero}/show', 'App\Http\Controllers\GenerosController@show')->name('Genero.show');


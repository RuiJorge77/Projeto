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
route::get('/atores', 'App\Http\Controllers\AtoresController@index')->name('Atores.index');

route::get('/atores/{id}/show', 'App\Http\Controllers\AtoresController@show')->name('atores.show');

route::get('/atores/{id}/create', 'App\Http\Controllers\AtoresController@create')->name('atores.create');

route::post('/atores/{id}', 'App\Http\Controllers\AtoresController@store')->name('atores.store');

route::get('/atores/{id}/edit', 'App\Http\Controllers\AtoresController@edit')->name('atores.edit');

route::patch('/atores/{id}', 'App\Http\Controllers\AtoresController@update')->name('atores.update');

route::get('/atores/{id}/delete', 'App\Http\Controllers\AtoresController@delete')->name('atores.delete');

route::get('/atores/{id}', 'App\Http\Controllers\AtoresController@destroy')->name('atores.destroy');

//filmes
route::get('/filmes', 'App\Http\Controllers\FilmesController@index')->name('Filmes.index');

route::get('/filmes/{numero}/show', 'App\Http\Controllers\FilmesController@show')->name('Filmes.show');


//generos
route::get('/generos', 'App\Http\Controllers\GenerosController@index')->name('Genero.index');

route::get('/generos/{numero}/show', 'App\Http\Controllers\GenerosController@show')->name('Genero.show');


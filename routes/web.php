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

route::get('/atores', 'App\Http\Controllers\AtoresController@index')->name('Atores.index');

route::get('/atores/{numero}/show', 'App\Http\Controllers\AtoresController@show')->name('atores.show');

route::get('/filmes', 'App\Http\Controllers\FilmesController@index')->name('Filmes.index');

route::get('/filmes/{numero}/show', 'App\Http\Controllers\FilmesController@show')->name('Filmes.show');

route::get('/generos', 'App\Http\Controllers\GenerosController@index')->name('Genero.index');

route::get('/generos/{numero}/show', 'App\Http\Controllers\GenerosController@show')->name('Genero.show');
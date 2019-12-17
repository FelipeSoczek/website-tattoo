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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// POST FOTOS ROUTE

Route::get('portfolio', 'PostControlador@index');
Route::post('portfolio', 'PostControlador@store');
Route::delete('portfolio/{id}', 'PostControlador@destroy');
Route::get('portfolio/download/{id}', 'PostControlador@download');

Route::get('portfolio', 'PostControlador@search');

// ESTILO

Route::get('estilos', 'EstilosControlador@index');

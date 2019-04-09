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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PagesController@index');
Route::get('produto/cadastro', 'PagesController@cadastro');
Route::post('produto/cadastro', 'PagesController@salva');
Route::get('produto/listar', 'PagesController@listar');
Route::get('produto/editar/{id}', 'PagesController@editar');
Route::post('produto/editar/{id}', 'PagesController@update');
Route::get('produto/delete/{id}', 'PagesController@remover');
Route::post('produto/delete', 'PagesController@delete');
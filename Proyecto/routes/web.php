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

Route::get('Cursos', 'CursosController@Cursos');
Route::get('Comentarios', 'ComentariosController@Comentarios');
Route::get('tecnicas','ApiController@index');
Route::get('tecnicas/{id}','ApiController@show');
Route::get('tecnicasadd','ApiController@add');
Route::get('tecnicasdelete/{id}','ApiController@delete');
Route::get('tecnicasupdate/{id}','ApiController@update');

Auth::routes();

//Route::get('index', 'Registro_tutorController@regis');

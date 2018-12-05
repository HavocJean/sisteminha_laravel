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

Route::get('/', 'LoginController@login');
Route::post('/', 'LoginController@login');

Route::get('/', 'LoginController@logado');

Route::get('/logout', 'LoginController@deslogar');
Route::post('/logout', 'LoginController@deslogar');

Route::get('/redefinir', 'LoginController@redefinirSenha');
Route::post('/redefinir', 'LoginController@redefinirSenha');

Route::get('/trocarsenha/{token}', 'LoginController@trocarSenha');
Route::post('/trocarsenha', 'LoginController@trocarSenha');
//Route::get('/', 'LoginController@pegarUsuario');


Route::get('/peito', 'PesoController@treinoPeito');

Route::get('/adicionarpeito', 'PesoController@adicionarPeito');
Route::post('/adicionarpeito', 'PesoController@adicionarPeito');

Route::get('/editarpeito/{id_peito?}', 'PesoController@editarPeito');
Route::post('/editarpeito/{id_peito?}', 'PesoController@editarPeito');


Route::get('/costas', 'PesoController@treinoCostas');

Route::get('/adicionarcostas', 'PesoController@adicionarCostas');
Route::post('/adicionarcostas', 'PesoController@adicionarCostas');

Route::get('/editarcostas/{id_costas?}', 'PesoController@editarCostas');
Route::post('/editarcostas/{id_costas?}', 'PesoController@editarCostas');



Route::get('/triceps', 'PesoController@treinoTriceps');

Route::get('/adicionartriceps', 'PesoController@adicionarTriceps');
Route::post('/adicionartriceps', 'PesoController@adicionarTriceps');

Route::get('/editartriceps/{id_triceps?}', 'PesoController@editarTriceps');
Route::post('/editartriceps/{id_triceps?}', 'PesoController@editarTriceps');



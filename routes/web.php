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
Route::get('/', 'DashboardController@index');


// Rotas Chaves
Route::get('chave','ChaveController@index');

Route::get('chave/criar','ChaveController@create');
Route::post('chave/criar','ChaveController@store');

Route::get('chave/editar/{chave}', 'ChaveController@edit');
Route::post('chave/editar/{chave}','ChaveController@update');

//Rotas usuario
Route::get('usuario','UsuarioController@index');

Route::get('usuario/criar','UsuarioController@create');
Route::post('usuario/criar','UsuarioController@store');

Route::get('usuario/editar/{usuario}','UsuarioController@edit');
Route::post('usuario/editar','UsuarioController@update');

Route::get('usuario/detalhes/{usuario}','UsuarioController@show');

//Rotas Perfil

Route::get('perfil','PerfilController@index');

Route::get('perfil/criar','PerfilController@create');
Route::post('perfil/criar','PerfilController@store');

Route::get('perfil/editar/{perfil}','PerfilController@edit');
Route::post('perfil/editar{perfil}','PerfilController@update');

Route::get('perfil/detalhes/{perfil}','PerfilController@show');

//Rotas Reserva de Ambiente

Route::get('reserva/','ReservaAmbienteController@index');

Route::get('reserva/criar','ReservaAmbienteController@create');
Route::post('reserva/criar','ReservaAmbienteController@store');

Route::get('reserva/lista-chaves/{Ambiente}','ReservaAmbienteController@getChaves');

Route::get('reserva/editar/{{ReservaAmbiente}}','ReservaAmbienteController@edit');
Route::get('reserva/editar/{{ReservaAmbiente}}','ReservaAmbienteController@update');

Route::get('reserva/detalhes/{{ReservaAmbiente}}','ReservaAmbienteController@show');



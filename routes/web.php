<?php

Route::get('/', function () {
	return view('index');
});


Route::get('/contactos', 'ContactoController@index');
Route::get('/perfil', 'UsuarioController@index');

Route::get('/organizacion', function (){
	return view('organizacionIndex');
});



Route::post('/catastrofes', 'CatastrofeController@store');
Route::get('/catastrofes', 'CatastrofeController@index');
Route::get('/catastrofes/create', 'CatastrofeController@create');
Route::get('/catastrofes/{id}', 'CatastrofeController@show');
Route::delete('/catastrofes/{id}', 'CatastrofeController@delete');


Route::post('/medidas', 'MedidaController@store');
Route::get('/medidas', 'MedidaController@index');
Route::get('/medidas/create', 'MedidaController@create');
Route::get('/medidas/{id}', 'MedidaController@show');
Route::get('/medidas/{id}', 'MedidaController@edit');
Route::patch('/medidas/{id}', 'MedidaController@update');
Route::delete('/medidas/{id}', 'MedidaController@delete');


Route::post('/actividades', 'RegistroActividadController@store');
Route::get('/actividades', 'RegistroActividadController@index');


Route::post('/voluntarios', 'VoluntarioController@store');
Route::get('/voluntarios', 'VoluntarioController@indexLog');
Route::get('/voluntarios/{id}', 'VoluntarioController@edit');
Route::get('/voluntarios/{id}', 'VoluntarioController@show');
Route::patch('/voluntarios/{id}', 'VoluntarioController@update');
Route::delete('/voluntarios/{id}', 'VoluntarioController@delete');


Route::post('/bienes', 'BienController@store');
Route::get('/bienes/create', 'BienController@create');
Route::get('/bienes', 'BienController@index');


Route::post('/depositos', 'DepositoController@store');
Route::get('/depositos', 'DepositoController@index');
Route::get('/depositos/create', 'DepositoController@create');


Route::post('/gastos', 'GastoController@store');
Route::get('/gastos', 'GastoController@index');
Route::get('/gastos/create', 'GastoController@create');
Route::get('/gastos/{id}', 'GastoController@show');


Route::get('/donaciones', 'DonacionController@index');




Route::get('/evento', 'EventoABeneficioController@index');

Route::post('/comentarios', 'ComentarioController@store');
Route::get('/comentarios', 'ComentarioController@index');
Route::get('/comentarios/{id}', 'ComentarioController@edit');
Route::get('/comentarios/create', 'ComentarioController@create');
Route::patch('/comentarios/{id}', 'ComentarioController@update');
Route::delete('/comentarios/{id}', 'ComentarioController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('provincias/{id}', 'ProvinciaController@provincias');
Route::get('comunas/{id}', 'ComunaController@comunas');
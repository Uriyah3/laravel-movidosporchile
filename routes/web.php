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

Route::resources([
	'medidas' => 'MedidaController',
	'centros_de_acopio' => 'CentroAcopioController',
	'donaciones' => 'DonacionController',
	'eventos_a_beneficio' => 'EventoABeneficioController',
	'voluntariados' => 'VoluntariadoController',
	'centros_de_acopio.comentarios' => 'ComentarioCentroAcopioController',
	'donaciones.comentarios' => 'ComentarioDonacionController',
	'eventos_a_beneficio.comentarios' => 'ComentarioEventoABeneficioController',
	'voluntariados.comentarios' => 'ComentarioVoluntariadoController',
	'voluntariados.voluntarios' => 'VoluntarioController',
	'centros_de_acopio.bienes' => 'BienController',
	'donaciones.depositos' => 'DepositoController'
]);

Route::delete('/usuarios/{id}', 'UsuarioController@destroy');

/*
Route::post('/medidas', 'MedidaController@store');
Route::get('/medidas', 'MedidaController@index');
Route::get('/medidas/create', 'MedidaController@create');
Route::get('/medidas/{id}', 'MedidaController@show');
Route::get('/medidas/{id}', 'MedidaController@edit');
Route::patch('/medidas/{id}', 'MedidaController@update');
Route::delete('/medidas/{id}', 'MedidaController@delete');

Route::post('/centros_de_acopio', 'CentroAcopioController@store');
Route::get('/centros_de_acopio', 'CentroAcopioController@index');
Route::get('/centros_de_acopio/create', 'CentroAcopioController@create');
Route::get('/centros_de_acopio/{id}', 'CentroAcopioController@show');
Route::get('/centros_de_acopio/{id}', 'CentroAcopioController@edit');
Route::patch('/centros_de_acopio/{id}', 'CentroAcopioController@update');
Route::delete('/centros_de_acopio/{id}', 'CentroAcopioController@delete');

Route::post('/donaciones', 'DonacionController@store');
Route::get('/donaciones', 'DonacionController@index');
Route::get('/donaciones/create', 'DonacionController@create');
Route::get('/donaciones/{id}', 'DonacionController@show');
Route::get('/donaciones/{id}', 'DonacionController@edit');
Route::patch('/donaciones/{id}', 'DonacionController@update');
Route::delete('/donaciones/{id}', 'DonacionController@delete');

Route::post('/eventos_a_beneficio', 'EventoABeneficioController@store');
Route::get('/eventos_a_beneficio', 'EventoABeneficioController@index');
Route::get('/eventos_a_beneficio/create', 'EventoABeneficioController@create');
Route::get('/eventos_a_beneficio/{id}', 'EventoABeneficioController@show');
Route::get('/eventos_a_beneficio/{id}', 'EventoABeneficioController@edit');
Route::patch('/eventos_a_beneficio/{id}', 'EventoABeneficioController@update');
Route::delete('/eventos_a_beneficio/{id}', 'EventoABeneficioController@delete');

Route::post('/voluntariados', 'VoluntariadoController@store');
Route::get('/voluntariados', 'VoluntariadoController@index');
Route::get('/voluntariados/create', 'VoluntariadoController@create');
Route::get('/voluntariados/{id}', 'VoluntariadoController@show');
Route::get('/voluntariados/{id}', 'VoluntariadoController@edit');
Route::patch('/voluntariados/{id}', 'VoluntariadoController@update');
Route::delete('/voluntariados/{id}', 'VoluntariadoController@delete');
*/

Route::post('/actividades', 'RegistroActividadController@store');
Route::get('/actividades', 'RegistroActividadController@index');

/*
Route::post('/voluntarios', 'VoluntarioController@store');
Route::get('/voluntarios', 'VoluntarioController@index');
Route::get('/voluntarios/{id}', 'VoluntarioController@edit');
Route::get('/voluntarios/{id}', 'VoluntarioController@show');
Route::patch('/voluntarios/{id}', 'VoluntarioController@update');
Route::delete('/voluntarios/{id}', 'VoluntarioController@delete');
*/

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


Route::post('/comentarios', 'ComentarioController@store');
Route::get('/medida/{id}/comentarios', 'ComentarioController@index');
Route::get('/comentarios/{id}/edit', 'ComentarioController@edit');
Route::get('/medida/{id}/comentarios/create', 'ComentarioController@create');
Route::patch('/comentarios/{id}', 'ComentarioController@update');
Route::delete('/comentarios/{id}', 'ComentarioController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('provincias/{id}', 'ProvinciaController@provincias');
Route::get('comunas/{id}', 'ComunaController@comunas');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

 



Route::get('/bloqueos', 'BloqueoController@index');
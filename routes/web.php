<?php

/*
|--------------------------------------------------------------------------
| Web Rutas
|--------------------------------------------------------------------------
|
| Se encuentran dentro de resources -> views 
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','TestController@welcome');



/*==============================
PRIMER RUTA DE PRUEBA

Route::get('/prueba', function(){
	return 'Hola soy una ruta prueba';

	
});
================================*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

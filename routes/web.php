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
    return 'hola a todos';
});

// http://127.0.0.1:8000/saludar/gaby/stallo
// http://127.0.0.1:8000/saludar/gaby

Route::get('/saludar/{nombre}/{apellido?}', function ($nombre, $apellido=null) {
    if($apellido!=null) {
    	return 'hola, ' . $nombre . ' tu apellido es ' . $apellido;	
    } else {
    	return 'hola, ' . $nombre . ' no se tu apellido';
    }
    
});


Route::get('/saludar/{nombre}', function ($nombre) {
	return 'hola, soy otra ruta, ' . $nombre;
});



Route::get('/potencia_de_2/{numero}', function ($numero) {
	$resultado = $numero * $numero;
	return 'el resultado es: ' . $resultado;
});


Route::get('consultar/auto/{id}', function($id) {
	$autos = [
		'a' => 'El auto de Gaby',
		'b' => 'El auto de Javi'
	];


	return 'el auto consultado es: ' . $autos[$id];
});

Route::get('consultar/base', function() {
	return config('database.connections.mysql.database');
});

Route::get('consultar/nombre', function() {
	return config('dh.nombre');
});



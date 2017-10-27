<?php


Route::get('/saludar/{nombre}/{apellido}', 'SaludarController@saludarConApellido');


Route::get('saludar/{nombre}', 'SaludarController@saludar');


Route::get('peliculas', 'PeliculasController@listar');


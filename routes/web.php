<?php


Route::get('/saludar/{nombre}/{apellido}', 'SaludarController@saludarConApellido');


Route::get('saludar/{nombre}', 'SaludarController@saludar');


Route::get('peliculas', 'PeliculasController@listar')->name('listado_de_peliculas');

Route::get('pelicula/{id}', 'PeliculasController@detalle')->name('detalle_de_pelicula');


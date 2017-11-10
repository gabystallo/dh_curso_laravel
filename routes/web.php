<?php


Route::get('/saludar/{nombre}/{apellido}', 'SaludarController@saludarConApellido');


Route::get('saludar/{nombre}', 'SaludarController@saludar');


Route::get('peliculas', 'PeliculasController@listar')->name('listado_de_peliculas');

Route::get('pelicula/{id}', 'PeliculasController@detalle')->name('detalle_de_pelicula');

Route::get('peliculas/crear', 'PeliculasController@crearFormulario')->name('form_crear_pelicula');

Route::post('peliculas/crear', 'PeliculasController@crear')->name('crear_pelicula');

Route::delete('pelicula/{id}', 'PeliculasController@eliminar')->name('eliminar_pelicula')->middleware('es_admin');

Route::get('pelicula/{id}/editar', 'PeliculasController@editarFormulario')->name('form_editar_pelicula');

Route::put('pelicula/{id}/editar', 'PeliculasController@editar')->name('editar_pelicula');


Route::resource('actores', 'ActoresController');


Route::get('colecciones', 'EjemplosController@colecciones');

Route::get('subir', 'EjemplosController@mostrarSubir');

Route::post('subir', 'EjemplosController@subir');


Route::get('/', 'EjemplosController@mostrarSubir');

Auth::routes();

//Route::get('/homeeee', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');











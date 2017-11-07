<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemplosController extends Controller
{
    public function colecciones()
    {
    	$mascotas = collect([
    		['tipo' => 'Perro', 'nombre' => 'Baqueta'],
    		['tipo' => 'Gato', 'nombre' => 'Michi'],
    		['tipo' => 'Perro', 'nombre' => 'Maluko'],
    		['tipo' => 'Hurón', 'nombre' => 'Simón'],
    	]);

    	$otra_mascota = ['tipo' => 'Loro', 'nombre' => 'Pocho'];

    	$mascotas = $mascotas->sort();


    	// $filtrado = $mascotas->filter(function($mascota) {
    	// 		return $mascota['tipo']=='Perro';
    	// 	});

    	$mapeado = $mascotas->map(function($mascota) {
    			return 'Mi ' . $mascota['tipo'] . ' se llama ' . $mascota['nombre'];
    		});

    	//$jsoneado = $mascotas->toJson();

    	//$shuffleeado = $mascotas->shuffle();

    	//$algunos = $shuffleeado->take(2);

    	dd($mascotas);
    }

    public function mostrarSubir()
    {
    	return view('formulario-subir');
    }

    public function subir(Request $request)
    {
    	$nombre = 'fotin.' . $request->file('imagen')->extension();
    	//$path = $request->file('imagen')->storePublicly('public/fotines');
    	$path = $request->file('imagen')->storePubliclyAs('public/fotines', $nombre);
    	//dd('se guardó la imagen en: ' . $path);

    	return redirect('/subir');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
	protected $peliculas;

	public function __construct()
	{
		$this->peliculas = [
    		'Toy Story',
    		'Up',
    		'Fight Club'
    	];
	}
    public function listar()
    {
    	

    	return view('peliculas', ['peliculas'=>$this->peliculas]);
    }
}

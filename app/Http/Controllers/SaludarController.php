<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludarController extends Controller
{
    public function saludar($nombre)
    {
    	return view('saludos.saludo', ['nombre'=>'gaby']);
    }

    public function saludarConApellido($nombre, $apellido)
    {
    	//return view('saludos.saludo_con_apellido', ['nombre'=>$nombre, 'apellido'=>$apellido]);
    	return view('saludos.saludo_con_apellido', compact('nombre', 'apellido'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

use DB;


class PeliculasController extends Controller
{

    public function listar()
    {
    	//$peliculas = Pelicula::where('rating', '>', 8)
        //    ->orderBy('title')
        //    ->get();

        //dd('hola', $peliculas);

        // $peliculas = DB::table('movies')
        //     ->select('*')
        //     ->where('rating', '>', 8)
        //     ->get();

        //dd($peliculas);

        //return $peliculas;

        // $ejemplo = DB::table('sarasa')
        //             ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //             ->join('orders', 'users.id', '=', 'orders.user_id')
        //             ->select('users.*', 'contacts.phone', 'orders.price')
        //             ->toSql();
        // dd($ejemplo);


        $peliculas = Pelicula::all();

    	return view('peliculas', compact('peliculas'));
    }

    public function detalle($id)
    {
        $pelicula = Pelicula::find($id);

        return view('pelicula', compact('pelicula'));
    }
}

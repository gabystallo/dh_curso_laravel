<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Genero;

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


        //$peliculas = Pelicula::all();


        $peliculas = Pelicula::paginate(10);
        //$peliculas = Pelicula::with('genero')->get();
        //$genero = Genero::find(8);
        //$peliculas = $genero->peliculas; //peliculas()->get()

        //dd($genero);


        //dd($genero->peliculas()->count());

    	return view('peliculas.peliculas', compact('peliculas'));
    }

    public function detalle($id)
    {
        $pelicula = Pelicula::find($id);

        //$genero = $pelicula->genero;

        return view('peliculas.pelicula', compact('pelicula'));
    }


    public function crearFormulario()
    {
        $pelicula = new Pelicula;
        return view('peliculas.crear-pelicula', compact('pelicula'));
    }

    public function crear(Request $request)
    {
        $this->validate(
            $request,
            [
                'title' => 'required|unique:movies',
                'rating' => 'required|numeric|between:1,10',
                'release_date' => 'required|date'
            ],
            [
                'title.unique' => 'No puede haber 2 películas con el mismo título.',
                'rating.between' => 'El puntaje debe estar entre 1 y 10.'
            ]
        );

        $pelicula = new Pelicula($request->all());

        // $pelicula->title = $request->input('title');
        // $pelicula->rating = $request->input('rating');
        // $pelicula->release_date = $request->input('release_date');

        //dd($pelicula);

        $pelicula->save();

        //return 'se creo la pelicula id: ' . $pelicula->id;

        return redirect(route('listado_de_peliculas'));
    }


    public function eliminar($id)
    {
        $pelicula = Pelicula::findOrFail($id);

        $pelicula->delete();

        return redirect(route('listado_de_peliculas'));
    }

    public function editarFormulario($id)
    {
        $pelicula = Pelicula::findOrFail($id);

        $pelicula->release_date = date('Y-m-d', strtotime($pelicula->release_date));

        return view('peliculas.editar-pelicula', compact('pelicula'));
    }

    public function editar($id, Request $request)
    {
        $this->validate(
            $request,
            [
                'title' => 'required',
                'rating' => 'required|numeric|between:1,10',
                'release_date' => 'required|date'
            ],
            [
                'title.required' => 'El título es obligatorio.',
                'rating.required' => 'El puntaje es obligatorio.',
                'rating.between' => 'El puntaje debe estar entre 1 y 10.'
            ]
        );

        $pelicula = Pelicula::findOrFail($id);

        $pelicula->fill($request->all());

        $pelicula->save();

        return redirect(route('listado_de_peliculas'));

    }
}








@extends('layouts.html_base')


@section('cuerpo')
<h1>Películas</h1>
<ul>
	@forelse($peliculas as $pelicula)
		<li>
			{{ $loop->iteration }} {{ $pelicula }}
		</li>
	@empty
		<li>No hay películas</li>
	@endforelse
</ul>
@endsection

@section('titulo')
	<title>Películas</title>
@endsection

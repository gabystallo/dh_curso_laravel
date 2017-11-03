@extends('layouts.html_base')


@section('cuerpo')
<h1>Películas</h1>
<ul>
	<li><strong>{{ $pelicula->title }}</strong></li>
	<li>{{ $pelicula->rating }}</li>
	<li>{{ $pelicula->release_date }}</li>
	<li>{{ $pelicula->genero->name }}</li>
</ul>

<h2>Actores</h2>
<ul>
	@forelse($pelicula->actores as $actor)
		<li>{{ $actor->first_name }} {{ $actor->last_name }}</li>
	@empty
		<li>No hay actores en esta película :-O</li>
	@endforelse
</ul>
@endsection

@section('titulo')
	<title>Películas</title>
@endsection

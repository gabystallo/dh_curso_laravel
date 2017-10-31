@extends('layouts.html_base')


@section('cuerpo')
<h1>Películas</h1>
<ul>
	<li><strong>{{ $pelicula->title }}</strong></li>
	<li>{{ $pelicula->rating }}</li>
	<li>{{ $pelicula->release_date }}</li>
</ul>
@endsection

@section('titulo')
	<title>Películas</title>
@endsection

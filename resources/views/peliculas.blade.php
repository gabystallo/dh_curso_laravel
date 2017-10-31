@extends('layouts.html_base')


@section('cuerpo')
<h1>Películas</h1>
<table border="1" width="90%">
	@forelse($peliculas as $pelicula)
		<tr>
			<td>{{ $pelicula->id }}</td>
			<td>
				<!-- <a href="{{ route('detalle_de_pelicula', ['id'=>$pelicula->id]) }}"> -->
				<a href="{{ route('detalle_de_pelicula', $pelicula) }}">
					{{ $pelicula->tituloConRating() }}
				</a>
			</td>
			<td>{{ $pelicula->awards }}</td>
			 
		</tr>
	@empty
		<tr><td>No hay películas</td></tr>
	@endforelse
</table>
@endsection

@section('titulo')
	<title>Películas</title>
@endsection

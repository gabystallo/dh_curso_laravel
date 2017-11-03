@extends('layouts.html_base')


@section('cuerpo')
<h1>Películas</h1>

<p>
	<a href="{{ route('form_crear_pelicula') }}">crear nueva</a>
</p>

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
			<td>
				@if($pelicula->genero)
					{{ $pelicula->genero->name }}
				@endif

			</td>
			<td>{{ $pelicula->awards }}</td>
			<td>
				<a href="{{ route('form_editar_pelicula', $pelicula) }}">editar</a>
			</td>
			<td>
				<form method="POST" action="{{ route('eliminar_pelicula', $pelicula) }}" onsubmit="return confirm('seguro?')">
					{{ method_field('DELETE') }}
					{{ csrf_field() }}
					<button type="submit">X</button>
					
				</form>
			</td>
		</tr>
	@empty
		<tr><td>No hay películas</td></tr>
	@endforelse
</table>
@endsection

@section('titulo')
	<title>Películas</title>
@endsection

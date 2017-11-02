@extends('layouts.html_base')

@section('cuerpo')

	<h1>Editar Película</h1>

	

	@if(count($errors)>0)
	<p>
		<ul>
			@foreach($errors->all() as $error)
				<li style="color:red">{{ $error }}</li>
			@endforeach
		</ul>
	</p>
	@endif

	<div>
		
		<form method="POST" action="{{ route('editar_pelicula', $pelicula) }}">
			{{ method_field('PUT') }}
			{{ csrf_field() }}
			
			@include('peliculas._form')

			<div>
				<button type="submit">Guardar</button>
			</div>

		</form>

	</div>


@endsection
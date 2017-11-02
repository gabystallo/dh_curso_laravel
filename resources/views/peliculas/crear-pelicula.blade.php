@extends('layouts.html_base')

@section('cuerpo')

	<h1>Crear Película</h1>

	

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
		
		<form method="POST" action="{{ route('crear_pelicula') }}">
			{{ csrf_field() }}
			
			@include('peliculas._form')

			<div>
				<button type="submit">Crear</button>
			</div>

		</form>

	</div>


@endsection
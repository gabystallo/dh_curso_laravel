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
			<div>
				<label>Título</label>
				<input type="text" name="title" value="{{ old('title') }}">
			</div>

			<div @if($errors->has('rating'))
				{!! 'style="color:red; border-left:2px solid red; padding-left:3px;"' !!}
				@endif
			>
				<label style="color:inherit;">Puntaje</label>
				<input type="text" name="rating" value="{{ old('rating') }}">
			</div>

			<div>
				<label>Fecha que salió</label>
				<input type="date" name="release_date" value="{{ old('release_date') }}">
			</div>

			<div>
				<button type="submit">Crear</button>
			</div>

		</form>

	</div>


@endsection
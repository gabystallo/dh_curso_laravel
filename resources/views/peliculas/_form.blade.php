<div>
	<label>Título</label>
	<input type="text" name="title" value="{{ old('title', $pelicula->title) }}">
</div>

<div @if($errors->has('rating'))
	{!! 'style="color:red; border-left:2px solid red; padding-left:3px;"' !!}
	@endif
>
	<label style="color:inherit;">Puntaje</label>
	<input type="text" name="rating" value="{{ old('rating', $pelicula->rating) }}">
</div>

<div>
	<label>Fecha que salió</label>
	<input type="date" name="release_date" value="{{ old('release_date', $pelicula->release_date) }}">
</div>
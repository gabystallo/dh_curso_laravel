<!DOCTYPE html>
<html>
<head>
	@yield('titulo')
</head>
<body>
	<nav>
		<a href="{{ route('listado_de_peliculas') }}">peliculas</a>
		<a href="/saludar/gaby">saludar</a>
	</nav>
	@yield('cuerpo')
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	@yield('titulo')

	<style type="text/css">
		.paginas { text-align:center; }
		.paginas li { display:inline-block; padding:6px; }
		.paginas li.active { border:1px solid blue; }
	</style>

</head>
<body>
	<nav>
		<a href="{{ route('listado_de_peliculas') }}">peliculas</a>
		<a href="/saludar/gaby">saludar</a>
	</nav>
	@yield('cuerpo')
</body>
</html>
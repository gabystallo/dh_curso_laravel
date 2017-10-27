@extends('layouts.html_base')

@section('cuerpo')
	Hola, cómo <strong>estás</strong>, {{ $nombre }}<br>
	@include('includes.texto')
@endsection

@section('titulo')
	<title>Saludo!</title>
@endsection
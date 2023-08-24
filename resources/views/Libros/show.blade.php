@extends('Plantilla.plantilla') 

@section('titulo','show') 

@section('contenido') 

<h1><center>Mostrar Biblioteca (SHOW)</center></h1>

<h6><b>ID</b></h6>
<p>{{$libro->id}}</p>

<h6><b>Titulo</b></h6>
<p>{{$libro->Titulo}}</p>

<h6><b>Autor</b></h6>
<p>{{$libro->Autor}}</p>

<h6><b>Editorial</b></h6>
<p>{{$libro->Editorial}}</p>

<h6><b>Ano_de_publicacion</b></h6>
<p>{{$libro->Ano_de_publicacion}}</p>

<h6><b>Cantidad_Disponible</b></h6>
<p>{{$libro->Cantidad_Disponible}}</p>

@endsection()
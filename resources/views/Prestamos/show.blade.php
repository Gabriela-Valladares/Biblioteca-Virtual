@extends('Plantilla.plantilla') 

@section('titulo','show') 

@section('contenido') 

<h1><center>Mostrar Prestamo (SHOW)</center></h1>

<h6><b>ID</b></h6>
<p>{{$prestamo->id}}</p>

<h6><b>fecha_solicitud</b></h6>
<p>{{$prestamo->fecha_solicitud}}</p>

<h6><b>fecha_prestamo</b></h6>
<p>{{$prestamo->fecha_prestamo}}</p>

<h6><b>fecha_devolución</b></h6>
<p>{{$prestamo->fecha_devolución}}</p>

<h6><b>libro_id/b></h6>
<p>{{$prestamo->libro_id}}</p>

<h6><b>usuario_id</b></h6>
<p>{{$prestamo->usuario_id}}</p>

@endsection()
@extends('Plantilla.plantilla') 

@section('titulo','show') 

@section('contenido') 

<h1><center>Mostrar usuario (SHOW)</center></h1>

<h6><b>ID</b></h6>
<p>{{$prestamo->id}}</p>

<h6><b>nombre</b></h6>
<p>{{$prestamo->nombre}}</p>

<h6><b>correo_electronico</b></h6>
<p>{{$prestamo->correo_electronico}}</p>

<h6><b>teléfono</b></h6>
<p>{{$prestamo->teléfono}}</p>

<h6><b>dirección</b></h6>
<p>{{$prestamo->dirección}}</p>

@endsection()
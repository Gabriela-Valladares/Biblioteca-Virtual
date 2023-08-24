@extends('Plantilla.plantilla')  

@section('titulo','create') 

@section('contenido')

<h1>Crear Prestamo (CREATE)</h1>

@if ($errors->any())                                              
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('prestamo.crear')}}">
@csrf 


<br>
<div>
fecha_solicitud
<input type="date" name="fecha_solicitud" id="fecha_solicitud" placeholder="Ingrese La fecha de solicitud" value="{{old('fecha_solicitud')}}">
</div>

<br>
<div>
fecha_prestamo
<input type="date" name="fecha_prestamo" id="fecha_prestamo" placeholder="Ingrese La fecha del prestamo" value="{{old('fecha_prestamo')}}">
</div>

<br>
<div>
fecha_devolución
<input type="date" name="fecha_devolucion" id="fecha_devolucion" placeholder="Ingrese La fecha de devolucion" value="{{old('fecha_devolucion')}}">
</div>

<br>
<div>
libro_id
<input type="number" name="libro_id" id="libro_id" placeholder="Ingrese el id del libro" value="{{old('libro_id')}}">
</div>

<br>
<div>
usuario_id
<input type="number" name="usuario_id" id="usuario_id" placeholder="Ingrese el id del usuario" value="{{old('usuario_id')}}">
</div>


<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection()
@extends('Plantilla.plantilla')  

@section('titulo','edit') 

@section('contenido') 

<h1>Editar Prestamo (Ediat)</h1>

@if ($errors->any())                                  
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('prestamo.update',[$prestamo->id])}}">
@method("PUT") 
@csrf 


<div>
id
<input type="number" name="id" id="id" placeholder="Ingrese El Id" value="{{old('id')}}">
</div>

<div>
fecha_solicitud
<input type="date" name="fecha_solicitud" id="fecha_solicitud" placeholder="Ingrese la fecha de solicitud" value="{{old('fecha_solicitud',$prestamo->fecha_solicitud)}}">
</div>

<br>
<div>
fecha_prestamo
<input type="date" name="fecha_prestamo" id="fecha_prestamo" placeholder="Ingrese la fecha del prestamo" value="{{old('fecha_prestamo',$prestamo->fecha_prestamo)}}">
</div>

<br>
<div>
fecha_devolución
<input type="date" name="fecha_devolución" id="fecha_devolución" placeholder="Ingrese la fecha de devolución" value="{{old('fecha_devolución',$prestamo->fecha_devolucion)}}">
</div>

<br>
<div>
libro_id
<input type="date" name="libro_id" id="libro_id" placeholder="Ingrese el id del libro" value="{{old('libro_id',$prestamo->libro_id)}}">
</div>

<br>
<div>
usuario_id
<input type="number" name="usuario_id" id="usuario_id" placeholder="Ingrese el id del usuario" value="{{old('usuario_id',$prestamo->usuario_id)}}">
</div>

<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection() 
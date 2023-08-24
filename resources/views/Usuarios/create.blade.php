@extends('Plantilla.plantilla')  

@section('titulo','create') 

@section('contenido')

<h1>Creacion del usuario (CREATE)</h1>

@if ($errors->any())                                              
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('usuario.crear')}}">
@csrf 

<br>
<div>
nombre
<input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre" value="{{old('nombre')}}">
</div>

<br>
<div>
correo_electronico
<input type="text" name="correo_electronico" id="correo_electronico" placeholder="Ingrese el correo_electronico" value="{{old('correo_electronico')}}">
</div>

<br>
<div>
teléfono
<input type="number" name="telefono" id="telefono" placeholder="Ingrese el teléfono" value="{{old('telefono')}}">
</div>

<br>
<div>
dirección
<input type="text" name="direccion" id="direccion" placeholder="Ingrese la dirección" value="{{old('direccion')}}">
</div>

<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection()
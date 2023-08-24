@extends('Plantilla.plantilla')  

@section('titulo','edit') 

@section('contenido') 

<h1>Editar usuario (Ediat)</h1>

@if ($errors->any())                                  
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('usuario.update',[$usuario->id])}}">
@method("PUT") 
@csrf 


<div>
nombre
<input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre" value="{{old('nombre',$usuario->nombre)}}">
</div>

<br>
<div>
correo_electronico
<input type="text" name="correo_electronico" id="correo_electronico" placeholder="Ingrese el correo electronico" value="{{old('correo_electronico',$usuario->correo_electronico)}}">
</div>

<br>
<div>
teléfono
<input type="text" name="telefono" id="telefono" placeholder="Ingrese el teléfono" value="{{old('teléfono',$usuario->telefono)}}">
</div>

<br>
<div>
dirección
<input type="text" name="direccion" id="direccion" placeholder="Ingrese la dirección" value="{{old('dirección'->direccion)}}">
</div>


<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection() 
@extends('Plantilla.plantilla')  

@section('titulo','edit') 

@section('contenido') 

<h1>Editar de Contacto (Edit)</h1>

@if ($errors->any())                                  
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('libro.update',[$libro->id])}}">
@method("PUT") 
@csrf 


<div>
titulo
<input type="text" name="Titulo" id="Titulo" placeholder="Ingrese El Titulo" value="{{old('Titulo', $libro->Titulo)}}">
</div>

<br>
<div>
autor
<input type="text" name="Autor" id="Autor" placeholder="Ingrese El Autor" value="{{old('Autor', $libro->Autor)}}">
</div>

<br>
<div>
editorial
<input type="text" name="Editorial" id="Editorial" placeholder="Ingrese El editorial" value="{{old('Editorial',$libro->Editorial)}}">
</div>

<br>
<div>
A!o de publicacion
<input type="number" name="Ano_de_publicacion" id="Ano_de_publicacion" placeholder="Ingrese eL Ano de publicacion" value="{{old('Ano_de_publicacion',$libro->Ano_de_publicacion)}}">
</div>

<br>
<div>
Cantidad Disponible
<input type="number" name="Cantidad_Disponible" id="Cantidad_Disponible" placeholder="Ingrese la Cantidad Disponible" value="{{old('Cantidad_Disponible',$libro->Cantidad_Disponible)}}">
</div>

<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection()
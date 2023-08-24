@extends('Plantilla.plantilla')  

@section('titulo','create') 

@section('contenido')

<h1>Creacion de la Biblioteca Virtual (CREATE)</h1>

@if ($errors->any())                                              
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('libro.crear')}}">
@csrf 

<div>
titulo
<input type="text" name="Titulo" id="Titulo" placeholder="Ingrese El Titulo" value="{{old('Titulo')}}">
</div>

<br>
<div>
autor
<input type="text" name="Autor" id="Autor" placeholder="Ingrese El Autor" value="{{old('Autor')}}">
</div>

<br>
<div>
editorial
<input type="text" name="Editorial" id="Editorial" placeholder="Ingrese El editorial" value="{{old('Editorial')}}">
</div>

<br>
<div>
A!o de publicacion
<input type="number" name="Ano_de_publicacion" id="Ano_de_publicacion" placeholder="Ingrese eL Ano de publicacion" value="{{old('Ano_de_publicacion')}}">
</div>

<br>
<div>
Cantidad Disponible
<input type="number" name="Cantidad_Disponible" id="Cantidad_Disponible" placeholder="Ingrese la Cantidad Disponible" value="{{old('Cantidad_Disponible')}}">
</div>

<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection()
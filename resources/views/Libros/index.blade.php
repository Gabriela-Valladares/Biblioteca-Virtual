@extends('Plantilla.plantilla')  

@section('titulo','index') 

@section('contenido') 

<h1><center>Tabla de Libros  (index)</center></h1>

<button><center><a class="btn btn" href= "{{route('libro.crear')}}"><u>Crear</u></a></center></button>

<table class="table" class="pagination">
    <thead>
        <th>Id</th>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Editorial</th>
        <th>Ano de publicacion</th>
        <th>Cantidad Disponible</th>

    </thead>
    <tbody>    
        @forelse($libros as $libro) 
        <tr>
        <td><a href= "{{route('libro.show', ['id'=>$libro->id])}}" >{{$libro->id}}</a></td>  
        <td>{{$libro->id}}</td> 
        <td>{{$libro->Titulo}}</td> 
        <td>{{$libro->Autor}}</td>
        <td>{{$libro->Editorial}}</td>
        <td>{{$libro->Ano_de_publicacion}}</td>
        <td>{{$libro->Cantidad_Disponible}}</td>
        <td><a href= "{{route('libro.editar', ['id'=>$libro->id])}}" >EDITAR</a></td>  
        
        <td>
        <form  method="post" action="{{route('libro.borrar',[$libro->id])}}">
        @method("DELETE")
        @csrf
        <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </td>
        
        </tr>
        @empty 
        <tr>
            <td>No hay Datos</td>
        </tr>
        @endforelse 

    </tbody>
</table>


@endsection() 
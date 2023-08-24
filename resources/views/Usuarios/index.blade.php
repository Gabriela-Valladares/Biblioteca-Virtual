@extends('Plantilla.plantilla')  

@section('titulo','index') 

@section('contenido') 

<h1><center>Tabla de Usuario (index)</center></h1>

<button><center><a class="btn btn" href= "{{route('usuario.crear')}}"><u>Crear</u></a></center></button>

<table class="table" class="pagination">
    <thead>
        <th>id</th>
        <th>nombre</th>
        <th>correo_electronico</th>
        <th>teléfono</th>
        <th>dirección</th>

    </thead>
    <tbody>    
        @forelse($usuarios as $usuario) 
        <tr>
        <td><a href= "{{route('usuario.show', ['id'=>$usuario->id])}}" >{{$usuario->id}}</a></td>  
        <td>{{$usuario->id}}</td> 
        <td>{{$usuario->nombre}}</td> 
        <td>{{$usuario->correo_electronico}}</td>
        <td>{{$usuario->telefono}}</td>
        <td>{{$usuario->direccion}}</td>
        <td><a href= "{{route('usuario.editar', ['id'=>$usuario->id])}}" >EDITAR</a></td>  
        
        <td>
        <form  method="post" action="{{route('usuario.borrar',[$usuario->id])}}">
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
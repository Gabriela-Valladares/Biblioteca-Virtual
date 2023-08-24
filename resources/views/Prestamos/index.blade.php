@extends('Plantilla.plantilla')  

@section('titulo','index') 

@section('contenido') 

<h1><center>Tabla de Prestamos (index)</center></h1>

<button><center><a class="btn btn" href= "{{route('prestamo.crear')}}"><u>Crear</u></a></center></button>

<table class="table" class="pagination">
    <thead>
        <th>id</th>
        <th>fecha_solicitud</th>
        <th>fecha_prestamo</th>
        <th>fecha_devolución</th>
        <th>libro_id</th>
        <th>usuario_id</th>

    </thead>
    <tbody>    
        @forelse($prestamos as $prestamo) 
        <tr>
        <td><a href= "{{route('prestamo.show', ['id'=>$prestamo->id])}}" >{{$prestamo->id}}</a></td>  
        <td>{{$prestamo->id}}</td> 
        <td>{{$prestamo->fecha_solicitud}}</td> 
        <td>{{$prestamo->fecha_prestamo}}</td>
        <td>{{$prestamo->fecha_devolución}}</td>
        <td>{{$prestamo->libro_id}}</td>
        <td>{{$prestamo->usuario_id}}</td>
        <td><a href= "{{route('prestamo.editar', ['id'=>$prestamo->id])}}" >EDITAR</a></td>  
        
        <td>
        <form  method="post" action="{{route('prestamo.borrar',[$prestamo->id])}}">
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
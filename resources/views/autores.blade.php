@extends('plantilla')

@section('contenido')
    
    <br>
    <h1>Listado de actores &nbsp; <button>Agregar Nuevo Actor</button> </h1>
    <br>
    <table width="60%" border="1">
        <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>FECHA DE CREACION</th>
        </thead>
        <tbody>
            @foreach ($listActores as $item) 
            <tr>
                <td>{{ $item->actor_id }}</td>
                <td>{{ $item->first_name }}</td>
                <td>{{ $item->last_name }}</td>
                <td>{{ $item->last_update }}</td>
            </tr>
            @endforeach  
        </tbody>
    </table>
    <br>
    <hr>
@endsection
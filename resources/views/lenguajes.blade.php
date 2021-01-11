@extends('plantilla')

@section('contenido')

<br>
<h1>Listado de Lenguajes o Idiomas</h1>
<br>
<table width="50%" border="1">
    <thead>
        <th>ID</th>
        <th>NOMBRE</th>        
        <th>FECHA DE CREACION</th>
    </thead>
    <tbody>
        @foreach ($listLanguages as $item)
            <tr>
                <td>{{$item->language_id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->last_update}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<hr>
@endsection
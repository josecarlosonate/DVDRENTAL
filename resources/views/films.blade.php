@extends('plantilla')

@section('contenido')

<br>
<h1>Listado de film o peliculas</h1>
<br>
<table width="100%" border="1">
    <thead>
        <th>ID</th>
        <th>title</th>        
        <th>description</th>
        <th>release_year</th>
        <th>language_id</th>
        <th>original_language_id</th>
        <th>rental_duration(days)</th>
        <th>date</th>
    </thead>
    <tbody>
        @foreach ($listFilm as $item)
            <tr>
                <td>{{$item->film_id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->release_year}}</td>
                <td>{{$item->language_id}}</td>
                <td>{{$item->original_language_id}}</td>
                <td>{{$item->rental_duration}}</td>
                <td>{{$item->last_update}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<hr>

@endsection
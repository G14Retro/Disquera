@extends('layouts.app')
@section('content')
<div class="float-right m-3">
    <a class="btn btn-primary" href="{{url('/genero-musical/create')}}">Nuevo</a>
</div>
<table class="table table-striped">
<tbody>
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Estado</th>
          </tr>
    </thead>
    @foreach($generos as $g)
    <tr>
        <th scope="row">{{$g->id}}</th>
        <th>{{$g->nombreGenero}}</th>
        <th>{{$g->estadoGenero}}</th>
        <th><a href="{{url('/genero-musical/'.$g->id.'/edit')}}" class="btn btn-warning">Editar</a></th>
        <th>
        <form action="{{url('/genero-musical/'.$g->id)}}" method="POST">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit" value="Eliminar" class="btn btn-danger" 
            onclick="return confirm('¿Esta seguro de eliminar este registro?')">
        </form>
        </th>
    </tr>
    @endforeach
</tbody>
</table>

@endsection
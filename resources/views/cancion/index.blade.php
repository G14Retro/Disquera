@extends('layouts.app')
@section('content')
<h3>Canciones</h3>
<div class="float-right m-3">
    <a class="btn btn-primary" href="{{url('/cancion/create')}}">Nuevo</a>
</div>
<table class="table table-striped">
    <tbody>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre canción</th>
                <th scope="col">Fecha grabación</th>
                <th scope="col">Duración</th>
                <th scope="col">Album</th>
                <th scope="col">Estado</th>
              </tr>
        </thead>
        @foreach($canciones as $c)
        <tr>
            <th scope="row">{{$c->id}}</th>
            <th>{{$c->nombreCancion}}</th>
            <th>{{$c->fechaGrabacion}}</th>
            <th>{{$c->duracionCancion}}</th>
            <th>{{$c->nombreAlbum}}</th>
            <th>{{$c->estadoCancion}}</th>
            <th><a href="{{url('/cancion/'.$c->id.'/edit')}}" class="btn btn-warning">Editar</a></th>
            <th>
            <form action="{{url('/cancion/'.$c->id)}}" method="POST">
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
@extends('layouts.app')
@section('content')
<div class="float-right m-3">
    <a class="btn btn-primary" href="{{url('/disquera/create')}}">Nuevo</a>
</div>
<table class="table table-striped">
<tbody>
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nit</th>
            <th scope="col">Nombre</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Estado</th>
          </tr>
    </thead>
    @foreach($disqueras as $d)
    <tr>
        <th scope="row">{{$d->id}}</th>
        <th>{{$d->nit_disquera}}</th>
        <th>{{$d->nombreDisquera}}</th>
        <th>{{$d->telefonoDisquera}}</th>
        <th>{{$d->direccionDisquera}}</th>
        <th>{{$d->estadoDisquera}}</th>
        <th><a href="{{url('/disquera/'.$d->id.'/edit')}}" class="btn btn-warning">Editar</a></th>
        <th>
        <form action="{{url('/disquera/'.$d->id)}}" method="POST">
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
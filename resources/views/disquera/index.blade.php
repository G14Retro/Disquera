@extends('layouts.app')
@section('content')
<table class="table table-striped">
<tbody>
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
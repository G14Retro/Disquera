@extends('layouts.app')
@section('content')
<table class="table table-striped">
<tbody>
    @foreach($albumes as $a)
    <tr>
        <th scope="row">{{$a->id}}</th>
        <th>{{$a->nombreAlbum}}</th>
        <th>{{$a->anioPublicacion}}</th>
        <th>{{$a->idArtistaFK}}</th>
        <th>{{$a->idGeneroFK}}</th>
        <th><a href="{{url('/album/'.$a->id.'/edit')}}" class="btn btn-warning">Editar</a></th>
        <th>
        <form action="{{url('/album/'.$a->id)}}" method="POST">
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
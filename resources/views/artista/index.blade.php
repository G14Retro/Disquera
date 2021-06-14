@extends('layouts.app')
@section('content')
<table class="table table-striped">
<tbody>
        <div class="container">
            <div class="row">
    @foreach($artistas as $a)
            <div class="card mr-3" style="width: 18rem;">
                <img src="{{ asset('storage').'/'.$a->foto}}" class="card-img-top">
                <div class="card-body bg-secondary">
                    <h5 class="card-title text-light">{{$a->nombreArtistico}}</h5>
                    <div class="row">
                    <a href="{{url('/artista/'.$a->id.'/edit')}}" class="btn btn-info mr-2">Editar</a></th>
                    <form action="{{url('/artista/'.$a->id)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" value="Eliminar" class="btn btn-danger" 
                    onclick="return confirm('¿Esta seguro de eliminar este registro?')">
                    </form>
                    </div>
                </div>
            </div>
    @endforeach
            </div>
        </div>
</tbody>
</table>
@endsection
@extends('layouts.app')
@section('content')
<div class="float-right m-3">
        <a class="btn btn-primary" href="{{url('/album/create')}}">Nuevo</a>
</div>
<div class="container">
<h2>Albumes</h2>
    <div class="row">
        @foreach($albumes as $a)
        <div class="card mr-3 mt-3" style="width: 18rem;">
        <img src="{{ asset('storage').'/uploads/albumes/'.$a->id.'/'.$a->foto}}" class="card-img-top">
            <div class="card-body bg-secondary">
                <h5 class="card-title text-light">Album: {{$a->nombreAlbum}}</h5>
                <p>
                    Año publicación: {{$a->anioPublicacion}}
                </p>
                <p>
                    Artista: {{$a->nombreArtistico}}
                </p>
                <p>
                    Genéro: {{$a->nombreGenero}}
                </p>
                <div class="row">
                <a href="{{url('/album/'.$a->id.'/edit')}}" class="btn btn-info mr-2">Editar</a></th>
                <form action="{{url('/album/'.$a->id)}}" method="POST">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" value="Eliminar" class="btn btn-danger" 
                onclick="return confirm('¿Esta seguro de eliminar este registro?')">
                </form>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
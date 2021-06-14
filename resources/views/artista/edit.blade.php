@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <h1>Editar Artista</h1>
    <div class="card" style="width: 30rem; margin:auto;">
        <div class="card-body">
            <form action="{{url('/artista/'.$artista->id)}}" method="POST">
                @csrf
                {{method_field('PATCH')}}
                @include('artista.form')
            </form>
        </div>
    </div>
</div>

@endsection
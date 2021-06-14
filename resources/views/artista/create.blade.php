@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <h1>Registro de Artista</h1>
    <div class="card" style="width: 30rem; margin:auto;">
        <div class="card-body">
            <form action="{{url('/artista')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('artista.form')
            </form>
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <h1>Registro de géneros musicales</h1>
    <div class="card" style="width: 30rem; margin:auto;">
        <div class="card-body">
            <form action="{{url('/cancion')}}" method="POST">
                @csrf
                @include('cancion.form')
            </form>
        </div>
    </div>
</div>

@endsection
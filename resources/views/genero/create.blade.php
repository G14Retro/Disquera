@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <h1>Registro de géneros musicales</h1>
    <div class="card" style="width: 30rem; margin:auto;">
        <div class="card-body">
            <form action="{{url('/genero-musical')}}" method="POST">
                @csrf
                @include('genero.form')
            </form>
        </div>
    </div>
</div>

@endsection
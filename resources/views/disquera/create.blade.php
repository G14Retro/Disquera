@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <h1>Registro de Disquera</h1>
    <div class="card" style="width: 30rem; margin:auto;">
        <div class="card-body">
            <form action="{{url('/disquera')}}" method="POST">
                @csrf
                @include('disquera.form')
            </form>
        </div>
    </div>
</div>

@endsection
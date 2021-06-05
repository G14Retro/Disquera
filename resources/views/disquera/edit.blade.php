@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <h1>Editar Disquera</h1>
    <div class="card" style="width: 30rem; margin:auto;">
        <div class="card-body">
            <form action="{{url('/disquera/'.$disquera->id)}}" method="POST">
                @csrf
                {{method_field('PATCH')}}
                @include('disquera.form')
            </form>
        </div>
    </div>
</div>

@endsection
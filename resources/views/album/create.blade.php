@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <h1>Registro de Albums</h1>
    <div class="card" style="width: 30rem; margin:auto;">
        <div class="card-body">
            <form action="{{url('/album')}}" method="POST">
                @csrf
                @include('album.form')
            </form>
        </div>
    </div>
</div>

@endsection
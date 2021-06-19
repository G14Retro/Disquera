@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <h1>Registro de albumes</h1>
    <div class="card" style="width: 30rem; margin:auto;">
        <div class="card-body">
            <form action="{{url('/album')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('album.form')
            </form>
        </div>
    </div>
</div>

@endsection
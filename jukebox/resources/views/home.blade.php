@extends('layouts.app')
@section('content')
    
<div class="container-fluid">
    <div class="row">
        @foreach($genres as $genre)
            <div class="col-sm-2">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">{{$genre->name}}</h5>
                <a href="#" class="btn btn-primary">see all {{$genre->name}} songs</a>
                </div>
            </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

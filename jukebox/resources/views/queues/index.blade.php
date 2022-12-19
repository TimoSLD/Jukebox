@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(Session::has('song'))
                @foreach(Session::get('song') as $item)
                    <div class="card">
                        {{$item['id']}}
                        {{$item['name']}}
                        <a href={{"delete/" . $item['id']}} class="btn btn-danger btn-sm"> Delete  {{$item['name']}} out queue? </a>
                    </div>
                @endforeach
            @endif
             <a href={{"delete/"}} class="btn btn-danger btn-sm"> Delete all out queue </a> 
        </div>
    </div>
@endsection
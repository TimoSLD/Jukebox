@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if ($value == null )
            {{ "no queue" }}
        
        @else
            
        @foreach($value as $key => $data)
        <div class="col-sm-12 mt-3" >
            <div class="card">
                <div class="card-body">
                    {{$value[$key]}}
                    @foreach($song as $keys => $info)
                        @if ($info->id == $data)
                            {{$info->name}}
                            {{$info->artist}}
                            {{$info->length}}
                            <a href={{"delete/" .$info->id}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"> Delete  {{$info->name}} out queue? </a>
                        @endif
                    @endforeach
                </div>
            </div>
         </div>
        @endforeach  
        @endif
    </div>
</div>
@endsection
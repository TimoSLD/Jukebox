@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
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
         
                        @endif
                    @endforeach
                </div>
            </div>
         </div>
        @endforeach  
    </div>
</div>
@endsection
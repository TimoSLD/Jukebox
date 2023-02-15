@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header">playlist Page</div>
  <div class="card-body">
      
      <form action="{{ url('playlists') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        
        <div style="display:none">
            <input type="text" id="user_id" name="user_id" value="{{Auth::user()->id}}">
        </div>
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@endsection
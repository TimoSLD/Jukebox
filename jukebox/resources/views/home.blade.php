@extends('layouts.app')

@section('content')
<p>welcome {{ Auth::user()->name }}</p>
@endsection

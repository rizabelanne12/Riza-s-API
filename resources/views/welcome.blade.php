@extends('layout')
@section('title', 'Home Page')
@section('content')

    <div class="d-flex justify-content-center fs-2 fw-bold">
        @auth
        {{auth()->user()->name}}
        @endauth
    </div>

    <div class="d-flex justify-content-center  .justify-content-sm-between">
        <img class="w-25 p-3" src="../../images/1.png" >
        <img class="w-25 p-3" src="../../images/3.png">
    </div>

@endsection
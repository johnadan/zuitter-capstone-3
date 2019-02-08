@extends('layouts.template')

@section('title', 'Home')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <h1>Welcome to TuittER!<h1>
            <br>
            <h6>The social media network exclusively for alumnis and students of Tuitt Coding Bootcamp Philippines!</h6>
            <a class="btn btn-primary" href="{{ route('login') }}">Sign in</a>  
            <a class="btn btn-secondary" href="{{ route('register') }}">Sign up</a> 
            <!-- <a class="btn btn-secondary" href="/hello">Sign up</a> --> 
        </div>
    </div>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <img src="{{ asset('images/ricky-750x422.jpg') }}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>

@endsection
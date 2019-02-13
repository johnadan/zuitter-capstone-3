@extends('layouts.template')

@section('title', 'Welcome')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <h1>Welcome to TuittER!<h1>
            <br>
            <h6>The professional social media network exclusively for alumnis and students of Tuitt Coding Bootcamp Philippines!</h6>
            <a class="button tuitt-button is-btn-red text-white" href="{{ route('login') }}">Sign in</a>  
            <a class="button tuitt-button is-btn-blue" href="{{ route('register') }}" data-v-0a0ff1ea="">Sign up</a> 
            <!-- <a class="btn btn-secondary" href="/hello">Sign up</a> --> 
            <!-- <a href="/allaboutcoding" id="allaboutcoding_btn" class="button tuitt-button is-btn-blue" style="margin-top:0" data-v-0a0ff1ea="">
      More About Coding
    </a> -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <img src="{{ asset('images/28951079_894703864041299_7445679528237596672_o.jpg') }}" class="img-fluid mt-1 mb-1" alt="tuitt instructors">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 d-flex justify-content-center">
            <img src="{{ asset('images/dsc_9182-750x498.jpg') }}" class="img-fluid" alt="tuitt instructors with alumnis">
        </div>
    </div>
</div>

@endsection


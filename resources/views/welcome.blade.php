@extends('layouts.template')

@section('title', 'Zuitter - Home')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <h1 class="text-center">Welcome to ZuittER!<h1>
            <br>
            <h6 class="text-center">The professional community site exclusively for alumnis and students of Zuitt Coding Bootcamp Philippines!</h6>
            <br>
            <a class="button tuitt-button is-btn-red text-white" href="{{ route('login') }}">Sign in</a>  
            <a class="button tuitt-button is-btn-blue" href="{{ route('register') }}" data-v-0a0ff1ea="">Sign up</a> 
            <br>
            <!-- <a class="btn btn-secondary" href="/hello">Sign up</a> --> 
            <!-- <a href="/allaboutcoding" id="allaboutcoding_btn" class="button tuitt-button is-btn-blue" style="margin-top:0" data-v-0a0ff1ea="">
      More About Coding
    </a> -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <img src="{{ asset('images/28951079_894703864041299_7445679528237596672_o.jpg') }}" class="img-fluid mt-5 mb-5" alt="tuitt instructors">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 d-flex justify-content-center">
            <img src="{{ asset('images/dsc_9182-750x498.jpg') }}" class="img-fluid mt-5 mb-5" alt="zuitt instructors with alumnis">
        </div>
    </div>
</div>

@endsection


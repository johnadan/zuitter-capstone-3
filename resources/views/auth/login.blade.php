@extends('layouts.template')

@section('title', 'Sign In')


@section('content')
<!-- <div class="hidden bs-callout bs-callout-warning">
  <h4>Oh snap!</h4>
  <p>This form seems to be invalid :(</p>
</div> -->

<div class="d-none alert alert-warning" role="alert">
  <!-- A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like. -->
  <h4>Oh snap!</h4>
  <p>This form seems to be invalid :(</p>
</div>

<!-- <div class="hidden bs-callout bs-callout-info">
  <h4>Yay!</h4>
  <p>Everything seems to be ok :)</p>
</div> -->

<div class="d-none alert alert-info" role="alert">
  <!-- A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like. -->
  <h4>Yay!</h4>
  <p>Everything seems to be ok :)</p>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}" data-parsley-validate="" id="login-form">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control user-email" name="email" value="{{ old('email') }}" required autofocus required="" data-parsley-trigger="change">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <div class="g-recaptcha" data-sitekey="6LftXGgaAAAAANpNyRyPmViitf2IEE7vxQBhKi2M"></div>
                                <!-- <button type="submit" class="button tuitt-button is-btn-red text-white">
                                    Login
                                </button> -->
                                <input type="submit" class="button tuitt-button is-btn-red text-white" value="Login">

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

function validate()
{
    $('#login-form').parsley().validate();
}
$(document).ready(function(){
// $(".text1").attr("data-parsley-required","true");
    $(".user-email").attr("data-parsley-type","email");

    $('#login-form').parsley().on('form:validated', function() {
        
        var errorCount = $("#login-form .parsley-error").length;
        
        if(errorCount === 0){
            $(".validateResult").html("Validated");
        } else {
            $(".validateResult").html("Invalid");
        }
    
    });
    
    $('#login-form').parsley().validate();
});

// $(function () {
//     $('#login-form').parsley().on('field:validated', function() {
//     var ok = $('.parsley-error').length === 0;
//     // $('.bs-callout-info').toggleClass('hidden', !ok);
//     $('.alert-info').toggleClass('d-none', !ok);
//     // $('.bs-callout-warning').toggleClass('hidden', ok);
//     $('.alert-warning').toggleClass('d-none', ok);
//   })
//   .on('form:submit', function() {
//     //return false; // Don't submit form for this demo
//     return true; 
//   });
// });    

</script>

@endsection

@extends('layouts.app')

@section('content')

<h3 class="text-center">
    <img src="img/knx2.jpg" alt="Kinx logo" class="admire_logo"><span class="text-white"> Kinx &nbsp;<br />
    Log In</span>
    </h3>
    </div>
    <div class="bg-white login_content login_border_radius">
    <form action="/dashboard" id="login_validator" method="post" class="login_validator">
        @csrf

        @if(Session::get('fail'))

        <span class="alert alert-danger">
            {{ Session::get('fail') }}
        </span>
        @endIf
    <div class="form-group">
    <label for="email" class="col-form-label"> E-mail</label>
    <div class="input-group">
    <span class="input-group-addon input_email"><i class="fa fa-envelope text-primary"></i></span>
    <input type="text" class="form-control  form-control-md" id="email" name="email" placeholder="E-mail">
    </div>
    @error('email')
    <p class="text-danger">{{$message}}</p>
@endError
    </div>
    
    <div class="form-group">
    <label for="password" class="col-form-label">Password</label>
    <div class="input-group">
    <span class="input-group-addon addon_password"><i class="fa fa-lock text-primary"></i></span>
    <input type="password" class="form-control form-control-md" id="password" name="password" placeholder="Password">
    </div>
    @error('password')
    <p class="text-danger">{{$message}}</p>
@endError
    </div>
    <div class="form-group">
    <div class="row">
    <div class="col-lg-12">
    <input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
    </div>
    </div>
    </div>
    </form>
    <div class="form-group">
    <div class="row">
    <div class="col-6">
    <label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input form-control">
    <span class="custom-control-indicator"></span>
     <a class="custom-control-description">Keep me logged in</a>
    </label>
    </div>
    <div class="col-6 text-right forgot_pwd">
    <a href="forgot_password1.html" class="custom-control-description forgottxt_clr">Forgot password?</a>
    </div>
    </div>
    </div>
    <div class="form-group">
    <div class="row">
    <div class="col-lg-6 col-sm-6 m-t-10">
    <div class="icon-white btn-facebook icon_padding loginpage_border">
    <i class="fa fa-facebook" aria-hidden="true"></i>
    <span class="text-white icon_padding text-center question_mark">Log In With Facebook</span>
    </div>
    </div>
    <div class="col-lg-6 col-sm-6 pull-lg-right m-t-10">
    <div class="icon-white btn-google icon_padding loginpage_border">
    <i class="fa fa-google-plus" aria-hidden="true"></i>
    <span class="text-white icon_padding question_mark">Log In With Google+</span>
    </div>
    </div>
    </div>
    </div>
    <div class="form-group">
    <label class="col-form-label">Don't you have an Account? </label>
    <a href='/register' class="text-primary"><b>Sign Up</b></a>
    </div>
@endSection
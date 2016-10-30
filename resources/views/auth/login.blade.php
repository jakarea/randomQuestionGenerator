@extends('layouts.auth')
@section('title', 'Pleaase login')
@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Login</b>FORM</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

        @if (session()->has('flash_notification.message'))
            <div class="alert alert-{{ session('flash_notification.level') }}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                {!! session('flash_notification.message') !!}
            </div>
        @endif
    {!! Form::open(array('url' => 'signin')) !!}
      <div class="form-group has-feedback">
        {!! Form::email('email','', array('class' => 'form-control','placeholder'=>'Email','required')) !!}

        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        {!! Form::password('password', array('class' => 'form-control','placeholder' => 'Password','required')) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
            {!!  Form::checkbox('remember_token', '1', false) !!} Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    {!! Form::close() !!}
    <!-- /.social-auth-links -->

    <a href="forgot-password">I forgot my password</a><br>
    <a href="signup" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
@endsection
@extends('layouts.auth')
@section('title', 'Create your account')
@section('content')
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>Registration</b>FORM</a>
  </div>

     @foreach ($errors->all() as $message) 
          <p>{{ $message }}</p>
         
      @endforeach

  <div class="register-box-body">
    <p class="login-box-msg">Register a new account</p>

   {!! Form::open(array('url'=>'user/create','method'=>'post')) !!}
      <div class="form-group has-feedback">
        {!! Form::text('fullname',$value=null,array('class' => 'form-control','placeholder' => 'Full Name','required' ))!!}
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
     
      <div class="form-group has-feedback">
        {!! Form::email('email',$value = null, array('class'=> 'form-control', 'placeholder' => 'Email','required')) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password','required'))!!}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        {!! Form::password('repassword', array('class' => 'form-control', 'placeholder' => 'Retype password','required'))!!}
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-offset-8 col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    {!! Form::close() !!}
    <a href="signin" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
@endsection
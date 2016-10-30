<!DOCTYPE html>
<html>
    <head>
        <title>Question Generator</title>
        {!! Html::style('assets/bootstrap/css/bootstrap.min.css')!!}                     
        {!! Html::style('footer/css/agency.min.css')!!}                     
        {!! Html::style('footer/vendor/bootstrap/css/bootstrap.min.css')!!}                     
        {!! Html::style('footer/vendor/font-awesome/css/font-awesome.min.css')!!}                     
        <style type="text/css">
            p{
                font-size: 17px;
            }
            .content{
                margin-top: 20px;
            }
        </style> 
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" >
                        Welcome To Autometic Question Generator
                    </h1>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        {!! HTML::image('assets/bootstrap/img/stamford.jpg','a picture', array('class' => 'img-responsive','class'=>'img-thumbnail')) !!}
                    </div>
                    <div class="col-md-6">
                        @if (session()->has('flash_notification.message'))
                        <div class="alert alert-{{ session('flash_notification.level') }}">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                            {!! session('flash_notification.message') !!}
                        </div>
                        @endif
                        <div class="login-box">
                            <!-- /.login-logo -->
                           <!--  {!! Form::open(array('url' => 'signin')) !!} -->
                            <form method="POST" action="{{url('signin')}}">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <div class="form-group has-feedback">
                                    {!! Form::email('email','', array('class' => 'form-control','placeholder'=>'Email')) !!}
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    {!! Form::password('password', array('class' => 'form-control','placeholder' => 'Password')) !!}
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <a href="signup" class="text-center">Register a new membership</a>
                                <button type="submit" class="btn btn-primary pull-right btn-flat">Sign In</button>
                            </form>
                            {!! Form::close() !!}
                        </div>
                        <!-- /.social-auth-links -->
                    </div>
                </div>
            </div>

            <div class="container content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3><i class="fa fa-fw fa-compass"></i>About us</h3>
                            </div>
                            <div class="panel-body">
                                <p align="justify">Question bank is a bunch of questions, which can be accessed by the user when needed. This is a online based system and based on Stamford University Examination system. Right now, this is faculty members oriented software, that means, only admin and faculty member can use this software after registration process completion. Course teachers can generate the Mid and Final term question so easily by pressing one button only. At least, they can generate a sample format of the question and modify by their own choice. Also, admin and course teachers can add different questions to the bank to enrich the database.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="copyright"><b>Copyright &copy; Your Website 2016</b></span>
                        </div>
                        <!-- <div class="col-md-2">
                            <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                        </div> -->
                    </div>
                </div>
            </footer>
        </div>
        {!! Html::script('assets/plugins/jQuery/jQuery-2.2.3.min.js') !!}
        {!! Html::script('assets/bootstrap/js/bootstrap.min.js') !!}
        {!! Html::script('footer/js/agency.min.js') !!}
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Question Generator</title>
        <?php echo Html::style('assets/bootstrap/css/bootstrap.min.css'); ?>   
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome To Autometic Question Generator
                    </h1>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>The Modern Business template by Start Bootstrap includes:</p>
                        <ul>
                            <li><strong>Bootstrap v3.2.0</strong>
                            </li>
                            <li>jQuery v1.11.0</li>
                            <li>Font Awesome v4.1.0</li>
                            <li>Working PHP contact form with validation</li>
                            <li>Unstyled page elements for easy customization</li>
                            <li>17 HTML pages</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
                    </div>
                    <div class="col-md-6">
                       <?php if(session()->has('flash_notification.message')): ?>
                            <div class="alert alert-<?php echo e(session('flash_notification.level')); ?>">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                <?php echo session('flash_notification.message'); ?>

                            </div>
                        <?php endif; ?>
                        <div class="login-box">
                            <!-- /.login-logo -->
                            <form method="POST" action="<?php echo e(url('signin')); ?>">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="form-group has-feedback">
                                <?php echo Form::email('email','', array('class' => 'form-control','placeholder'=>'Email')); ?>

                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <?php echo Form::password('password', array('class' => 'form-control','placeholder' => 'Password')); ?>

                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <a href="signup" class="text-center">Register a new membership</a>
                            <button type="submit" class="btn btn-primary pull-right btn-flat">Sign In</button>
                            <?php echo Form::close(); ?>

                        </div>
                        <!-- /.social-auth-links -->
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo Html::script('assets/plugins/jQuery/jQuery-2.2.3.min.js'); ?>

        <?php echo Html::script('assets/bootstrap/js/bootstrap.min.js'); ?>

    </body>
</html>
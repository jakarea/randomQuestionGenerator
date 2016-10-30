<?php $__env->startSection('title', 'Pleaase login'); ?>
<?php $__env->startSection('content'); ?>
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Login</b>FORM</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

        <?php if(session()->has('flash_notification.message')): ?>
            <div class="alert alert-<?php echo e(session('flash_notification.level')); ?>">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                <?php echo session('flash_notification.message'); ?>

            </div>
        <?php endif; ?>
    <?php echo Form::open(array('url' => 'signin')); ?>

      <div class="form-group has-feedback">
        <?php echo Form::email('email','', array('class' => 'form-control','placeholder'=>'Email','required')); ?>


        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <?php echo Form::password('password', array('class' => 'form-control','placeholder' => 'Password','required')); ?>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
            <?php echo Form::checkbox('remember_token', '1', false); ?> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo Form::close(); ?>

    <!-- /.social-auth-links -->

    <a href="forgot-password">I forgot my password</a><br>
    <a href="signup" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
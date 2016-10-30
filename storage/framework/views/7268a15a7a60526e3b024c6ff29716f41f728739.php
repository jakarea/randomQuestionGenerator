<?php $__env->startSection('title', 'Create your account'); ?>
<?php $__env->startSection('content'); ?>
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>Registration</b>FORM</a>
  </div>

     <?php foreach($errors->all() as $message): ?> 
          <p><?php echo e($message); ?></p>
         
      <?php endforeach; ?>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new account</p>

   <?php echo Form::open(array('url'=>'user/create','method'=>'post')); ?>

      <div class="form-group has-feedback">
        <?php echo Form::text('fullname',$value=null,array('class' => 'form-control','placeholder' => 'Full Name','required' )); ?>

        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
     
      <div class="form-group has-feedback">
        <?php echo Form::email('email',$value = null, array('class'=> 'form-control', 'placeholder' => 'Email','required')); ?>

        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <?php echo Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password','required')); ?>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <?php echo Form::password('repassword', array('class' => 'form-control', 'placeholder' => 'Retype password','required')); ?>

        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-offset-8 col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo Form::close(); ?>

    <a href="signin" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
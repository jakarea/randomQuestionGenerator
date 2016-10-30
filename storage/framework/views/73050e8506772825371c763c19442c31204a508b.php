<?php
/**
 * Created by PhpStorm.
 * User: Jakarea
 * Date: 8/1/2016
 * Time: 11:02 PM
 */
?>


<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo Form::open(['url' => 'user/update','class' => 'form-horizontal','method'=>'POST']); ?>

            <div class="box-body">
                <?php echo Form::hidden('user_id',$user->user_id); ?>

                <div class="form-group">
                    <?php echo Form::label('fullname', 'Full Name',array('class'=>'col-sm-2 control-label')); ?>

                    <div class="col-sm-10">
                        <?php echo Form::text('fullname',$user->fullname,array('class' => 'form-control', 'placeholder' => 'eg: Akora Amicra')); ?>

                    </div>
                </div>

                <div class="form-group">
                    <?php echo Form::label('email', 'Email',array('class'=>'col-sm-2 control-label')); ?>

                    <div class="col-sm-10">
                        <?php echo Form::email('email',$user->email,array('class' => 'form-control', 'placeholder' => 'eg: akora@email.com')); ?>

                    </div>
                </div>

                <div class="form-group">
                    <?php echo Form::label('password', 'Password',array('class'=>'col-sm-2 control-label')); ?>

                    <div class="col-md-10">
                        <?php echo Form::password('password','',array('class' => 'form-control', 'placeholder' => 'eg: **********')); ?>

                    </div>
                </div>

                <div class="form-group">
                    <?php echo Form::label('role', 'Role',array('class'=>'col-sm-2 control-label')); ?>

                    <div class="col-md-10">
                       <select name="role" required class="form-control">
                          <option value="">--Chose Role--</option>
                          <option value="1" <?php if($user->role == "1") echo "selected"; ?>>Admin</option>
                          <option value="2" <?php if($user->role == "2") echo "selected"; ?>>Teacher</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo Form::label('status', 'Status',array('class'=>'col-sm-2 control-label')); ?>

                    <div class="col-md-10">
                        <select name="status" required class="form-control">
                          <option value="">--Chose Role--</option>
                          <option value="1" <?php if($user->status == "1") echo "selected"; ?>>Active</option>
                          <option value="0" <?php if($user->status == "0") echo "selected"; ?>>Pending</option>
                          <option value="-1" <?php if($user->status == "-1") echo "selected"; ?>>Blocked</option>
                        </select>
                    </div>
                </div>

            </div>

            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
            </div>
            <!-- /.box-footer -->
            <?php echo Form::close(); ?>

        </div>
        <!-- /.box -->
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
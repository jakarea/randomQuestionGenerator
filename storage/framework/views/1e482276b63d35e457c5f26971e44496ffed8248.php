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
                <?php echo Form::open(['url' => 'user/save','class' => 'form-horizontal']); ?>

                <div class="box-body">
                    <div class="form-group">
                        <?php echo Form::label('fullname', 'Full Name',array('class'=>'col-sm-2 control-label')); ?>

                        <div class="col-sm-10">
                            <?php echo Form::text('fullname','',array('class' => 'form-control', 'placeholder' => 'eg: Akora Amicra')); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <?php echo Form::label('email', 'Email',array('class'=>'col-sm-2 control-label')); ?>

                        <div class="col-sm-10">
                            <?php echo Form::email('email','',array('class' => 'form-control', 'placeholder' => 'eg: akora@email.com')); ?>

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
                            <?php echo Form::select('role', array('1' => 'Admin', '2' => 'Teacher'), null, ['placeholder' => 'Pick a roel...']);; ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('status', 'Status',array('class'=>'col-sm-2 control-label')); ?>

                        <div class="col-md-10">
                            <?php echo Form::select('status', array('0' => 'Pending', '1' => 'Active', '-1' => 'Block'), null, ['placeholder' => 'Set status...']);; ?>

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
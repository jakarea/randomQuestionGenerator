<?php
/**
 * Created by PhpStorm.
 * User: Jakarea
 * Date: 7/27/2016
 * Time: 2:40 PM
 */
?>


<?php $__env->startSection('content'); ?>
<br>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add New Course</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php echo Form::open(['route' => 'course.store','class' => 'form-horizontal']); ?>

                    <div class="box-body">
                        <div class="form-group">
                            <?php echo Form::label('title', 'Course Title',array('class'=>'col-sm-2 control-label')); ?>

                            <div class="col-sm-10">
                                <?php echo Form::text('title','',array('class' => 'form-control', 'placeholder' => 'eg: Algorithom')); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('code', 'Course Code',array('class'=>'col-sm-2 control-label')); ?>

                            <div class="col-sm-10">
                                <?php echo Form::text('code','',array('class' => 'form-control', 'placeholder' => 'eg: cse-121')); ?>

                            </div>
                        </div>
                        <div class="form-group">
                                <?php echo Form::label('credite', 'Course Credite',array('class'=>'col-sm-2 control-label')); ?>

                            <div class="col-sm-10">
                                <?php echo Form::text('credite','',array('class' => 'form-control', 'placeholder' => 'eg: 3')); ?>

                            </div>
                        </div>
                        <?php if(Auth::user()->role ==1): ?>
                        <div class="form-group">
                             <?php echo Form::label('status', 'Course Status',array('class'=>'col-sm-2 control-label')); ?>

                             <div class="col-sm-10">
                                <select name="status" required class="form-control">
                                  <option value="">--Select Status--</option>
                                  <option value="0">InActive</option>
                                  <option value="1">Active</option>
                                </select>
                            </div>
                        </div>
                        <?php endif; ?>
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
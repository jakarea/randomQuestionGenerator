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
                    <h3 class="box-title">Add New question</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php echo Form::open(['route' => 'question.store','class' => 'form-horizontal']); ?>

                    <div class="box-body">
                        <div class="form-group">
                            <?php echo Form::label('title', 'Course Title',array('class'=>'col-sm-2 control-label')); ?>

                            <div class="col-sm-10">
                                <?php echo Form::text('title','',array('class' => 'form-control', 'placeholder' => 'eg: Algorithom')); ?>

                                <?php echo Form::hidden('course_id'); ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <?php echo Form::label('question', 'Question',array('class'=>'col-sm-2 control-label')); ?>

                            <div class="col-sm-10">
                                <?php echo Form::textarea('question','',array('class' => 'form-control', 'placeholder' => 'eg: What is your name?','rows'=>'3')); ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <?php echo Form::label('mark', 'Mark',array('class'=>'col-sm-2 control-label')); ?>

                            <div class="col-sm-10">
                                <?php echo Form::text('mark','',array('class' => 'form-control', 'placeholder' => 'eg: 10')); ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <?php echo Form::label('exam_type', 'Exam Type',array('class'=>'col-sm-2 control-label')); ?>

                            <div class="col-sm-10">
                                <?php echo Form::label('exam_type', 'Final',array('class'=>'control-label')); ?>

                                <?php echo Form::radio('exam_type', 'Final', false); ?>

                                <?php echo Form::label('exam_type', 'Mid','required',array('class'=>'control-label')); ?>

                                <?php echo Form::radio('exam_type', 'Mid', false); ?>

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
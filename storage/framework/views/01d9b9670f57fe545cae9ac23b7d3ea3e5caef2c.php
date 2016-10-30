<?php $__env->startSection('content'); ?>

    <br>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Select Subject To Generate Question</h3>
                </div>
                <!-- /.box-header -->

                <!-- form start --> 
                <?php echo Form::open(array('url' => 'pdf/preview', 'class' => 'form-horizontal','target' => '_blank')); ?>

                <div class="box-body">
                    <div class="form-group">
                        <?php echo Form::label('title', 'Course Title',array('class'=>'col-sm-2 control-label')); ?>

                        <div class="col-sm-10">
                            <?php echo Form::text('title','',array('class' => 'form-control', 'placeholder' => 'eg: Algorithom')); ?>

                            <input type="hidden" id="course_id" name="course_id">
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

                    <div class="form-group">
                        <?php echo Form::label('batch', 'Batch',array('class'=>'col-sm-2 control-label')); ?>

                        <div class="col-sm-10">
                            <?php echo Form::text('batch','',array('class' => 'col-sm-2 form-control','placeholder'=>'eg: 57c')); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <?php echo Form::label('time', 'Time',array('class'=>'col-sm-2 control-label')); ?>

                        <div class="col-sm-10">
                            <?php echo Form::text('time','',array('class' => 'col-sm-2 form-control','placeholder'=>'eg: 10:00 AM - 12:00 PM')); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <?php echo Form::label('date', 'Exam Date',array('class'=>'col-sm-2 control-label')); ?>

                        <div class="col-sm-10">
                            <?php echo Form::text('date','',array('class' => 'form-control')); ?>

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
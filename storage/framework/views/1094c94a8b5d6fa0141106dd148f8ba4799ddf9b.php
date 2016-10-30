<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <br>
            </div>
            <div class="col-md-10 col-md-offset-1">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Question</h3>
                        <form method="GET" action="/question" class="form-horizontal">
                            <div class="box-tools">
                                <div class="input-group input-group-sm">
                                    <input type="text" name="type" class="pull-right col-md-2" placeholder="Exam Type"> 
                                    <input type="text" name="title" class="pull-right col-md-2" placeholder="Course Title">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Course</th>
                                <th>Question</th>
                                <th>Mark</th>
                                <th>Exam</th>
                                <th>status</th>
                                <th>Actions</th>
                            </tr>
                            <?php foreach($questions as $question): ?>
                            <?php $prosno = substr($question->question,0,40);?>
                                <tr>
                                    <td> <?php echo $question->question_id; ?></td>
                                    <td> <?php echo $question->title; ?></td>
                                    <td> <?php echo $prosno. ". . . ?"; ?></td>
                                    <td> <?php echo $question->mark; ?></td>
                                    <td> <?php echo $question->exam_type; ?></td>
                                    <td> <?php echo $question->status; ?></td>
                                    <td>
                                         <a href="<?php echo route('question.show',$question->question_id); ?>" class="btn btn-sm bg-navy "><i class="fa fa-eye" aria-hidden="true"></i> Show</a>
                                        <a href="<?php echo route('question.edit',$question->question_id); ?>"class="btn btn-sm bg-orange "><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                        <?php echo Form::open(array('route'=>['question.destroy',$question->question_id],'method'=>'delete')); ?> 
                                        <?php echo Form::hidden('id',$question->question_id); ?>

                                        <?php echo Form::submit('delete'); ?>

                                        <?php echo Form::close(); ?>                                    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="text-center"><?php echo $questions->links(); ?> </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
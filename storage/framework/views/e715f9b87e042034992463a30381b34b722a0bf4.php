<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
                        <h3 class="box-title">View Question</h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>Course</th>
                                    <th>Question</th>
                                    <th>Mark</th>
                                    <th>Exam</th>
                                    <th>Actions</th>
                                </tr>
                                <tr>
                                    <td> <?php echo $question->question_id; ?></td>
                                    <td> <?php echo $question->course['title']; ?></td>
                                    <td> <?php echo $question->question; ?></td>
                                    <td> <?php echo $question->mark; ?></td>
                                    <td> <?php echo $question->exam_type; ?></td>
                                    <td>
                                        <a href="<?php echo route('question.edit',$question->question_id); ?>"class="btn btn-sm bg-orange "><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                        <?php echo Form::open(array('route'=>['question.destroy',$question->question_id],'method'=>'delete')); ?> 
                                        <?php echo Form::hidden('id',$question->question_id); ?>

                                        <?php echo Form::submit('delete'); ?>

                                        <?php echo Form::close(); ?> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
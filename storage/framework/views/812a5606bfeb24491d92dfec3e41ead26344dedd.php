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
                        <h3 class="box-title">All Course</h3>
                            <form action ="course" method="Get" class="pull-right">
                                <?php echo Form::label('status', 'Active',array('class'=>'control-label')); ?>

                                <?php echo Form::radio('status', 'Active', false); ?>

                                <?php echo Form::label('status', 'InActive','required',array('class'=>'control-label')); ?>

                                <?php echo Form::radio('status', 'InActive', false); ?>

                                <input type="text" name="key" placeholder="Title Or Code"><button type="submit" >Search</button>  
                            </form>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Code</th>
                                <th>Credit</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            <?php foreach($courses as $course): ?>
                            <?php 
                                if($course->status ==1)
                                    $status="Active";
                                else
                                    $status="InActive";
                            ?>
                                <tr>
                                    <td><?php echo $course->course_id; ?></td>
                                    <td> <?php echo $course->title; ?></td>
                                    <td> <?php echo $course->code; ?></td>
                                    <td> <?php echo $course->credite; ?></td>
                                    <td> <?php echo $status; ?></td>
                                    <?php if(Auth::user()->role == 1):?>
                                        <td>
                                        <a href="<?php echo route('course.edit',$course->course_id); ?>"class="btn btn-sm bg-orange "><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                        <?php echo Form::open(array('route'=>['course.destroy',$course->course_id],'method'=>'delete')); ?> 
                                        <?php echo Form::hidden('id',$course->course_id); ?>

                                        <?php echo Form::submit('delete'); ?>

                                        <?php echo Form::close(); ?>                                    
                                    </td>
                                    <?php endif;?>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="text-right"><?php echo $courses->links(); ?> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
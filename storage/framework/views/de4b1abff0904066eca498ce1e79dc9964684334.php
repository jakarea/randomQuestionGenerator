<?php
/**
 * Created by PhpStorm.
 * User: Jakarea
 * Date: 8/1/2016
 * Time: 10:30 AM
 */
  ?>


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
                        <h3 class="box-title">All Pdf</h3>
                        <form action ="pdf" method="Get" class="pull-right">
                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="key" class="form-control pull-right" placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
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
                                <th>Title</th>
                                <th>Course Code</th>
                                <th>Batch</th>
                                <th>Exam</th>
                                <th>Exam Date</th>
                                <th>Course Teacher</th>
                                <th>Actions</th>
                            </tr>
                            <?php foreach($allpdf as $pdf): ?>
                                <tr>
                                    <td><?php echo $pdf->preview_id; ?></td>
                                    <td> <?php echo $pdf->title; ?></td>
                                    <td> <?php echo $pdf->code; ?></td>
                                    <td> <?php echo $pdf->batch; ?></td>
                                    <td> <?php echo $pdf->exam_type; ?></td>
                                    <td> <?php echo $pdf->exam_date; ?></td>
                                    <td> <?php echo $pdf->ct; ?></td>
                                    <td>
                                        <a href="<?php echo url('pdf/show/'.$pdf->preview_id); ?>" class="btn btn-sm bg-navy"><i class="fa fa-info" aria-hidden="true"></i> Download</a>
                                        <?php if(Auth::user()->role == 1){?>
                                        <a href="<?php echo url('pdf/delete/'.$pdf->preview_id); ?>"class="btn btn-sm bg-red" onclick="return confirm('Are you sure you want to delete this?');"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                        <?php }?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right"><?php echo $allpdf->links(); ?> </div>
                </div>
                <!-- /.box -->
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
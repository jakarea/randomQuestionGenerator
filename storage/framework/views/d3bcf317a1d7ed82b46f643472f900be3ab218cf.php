<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <?php echo Html::style('assets/bootstrap/css/bootstrap.min.css'); ?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <?php echo Html::style('assets/dist/css/AdminLTE.min.css'); ?>

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <?php echo Html::style('assets/dist/css/skins/_all-skins.min.css'); ?>

    <!-- iCheck -->
    <?php echo Html::style('assets/plugins/iCheck/flat/blue.css'); ?>

    <!-- Morris chart -->
    <?php echo Html::style('assets/plugins/morris/morris.css'); ?>

    <!-- jvectormap -->
    <?php echo Html::style('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>

    <!-- Date Picker -->
    <?php echo Html::style('assets/plugins/datepicker/datepicker3.css'); ?>

    <!-- Daterange picker -->
    <!--Html::style('assets/plugins/daterangepicker/daterangepicker-bs3.css') -->
    <!-- bootstrap wysihtml5 - text editor -->
    <?php echo Html::style('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>

    <?php echo Html::style('assets/bootstrap/autocomplet/css/typeahed.css'); ?>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                               <?php echo Html::image('assets/dist/img/user2-160x160.jpg','User Image',array('class'=>'img-circle')); ?>

                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <?php echo Html::image('assets/dist/img/user3-128x128.jpg','User Image',array('class'=>'img-circle')); ?>

                                            </div>
                                            <h4>
                                                AdminLTE Design Team
                                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <?php echo Html::image('assets/dist/img/user4-128x128.jpg','User Image',array('class'=>'img-circle')); ?>

                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class="fa fa-clock-o"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <?php echo Html::image('assets/dist/img/user3-128x128.jpg','User Image',array('class'=>'img-circle')); ?>

                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <?php echo Html::image('assets/dist/img/user4-128x128.jpg','User Image',array('class'=>'img-circle')); ?>

                                            </div>
                                            <h4>
                                                Reviewers
                                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <?php if(Auth::user()->role == 1):?>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <?php
                                $pending = App\User::where('status',0)->count();
                                
                            ?>
                            <span class="label label-warning"><?php echo $pending; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have <?php echo $pending; ?> notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="user?status=Pending">
                                            <i class="fa fa-users text-aqua"></i> <?php echo $pending; ?> new member(s) has $pending
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                <?php endif;?>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Create a nice theme
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Some task I need to do
                                                <small class="pull-right">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Make beautiful transitions
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <?php echo Html::image('assets/dist/img/user2-160x160.jpg','User Pic',array('class'=>'user-image')); ?>

                            <span class="hidden-xs"><?php echo Auth::user()->fullname; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                 <?php echo Html::image('assets/dist/img/user2-160x160.jpg','User Pic',array('class'=>'img-circle')); ?>


                                <p>
                                    <?php echo Auth::user()->fullname; ?> - <?php echo Auth::user()->role; ?>

                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo url('profile'); ?>" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo url('signout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 500px">

        <!-- Content Header (Page header) -->
        <?php /*<section class="content-header">*/ ?>
            <?php /*<h1>*/ ?>
                <?php /*Dashboard*/ ?>
                <?php /*<small>Control panel</small>*/ ?>
            <?php /*</h1>*/ ?>
            <?php /*<ol class="breadcrumb">*/ ?>
                <?php /*<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/ ?>
                <?php /*<li class="active">Dashboard</li>*/ ?>
            <?php /*</ol>*/ ?>
        <?php /*</section>*/ ?>

        <!-- Main content -->
        <?php echo $__env->make('parts.flashMessage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <!-- /.content -->
    </div>


    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.3
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <?php echo $__env->make('admin.sidebar-dark', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<?php echo Html::script('assets/plugins/jQuery/jQuery-2.2.3.min.js'); ?>

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<?php echo Html::script('assets/bootstrap/js/bootstrap.min.js'); ?>

<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<?php echo Html::script('assets/plugins/morris/morris.min.js'); ?>

<!-- Sparkline -->
<?php echo Html::script('assets/plugins/sparkline/jquery.sparkline.min.js'); ?>

<!-- jvectormap -->
<?php echo Html::script('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>

<?php echo Html::script('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>

<!-- jQuery Knob Chart -->
<?php echo Html::script('assets/plugins/knob/jquery.knob.js'); ?>

<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<?php echo Html::script('assets/plugins/daterangepicker/daterangepicker.js'); ?>

<!-- datepicker -->
<?php echo Html::script('assets/plugins/datepicker/bootstrap-datepicker.js'); ?>

<!-- Bootstrap WYSIHTML5 -->
<?php echo Html::script('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>

<!-- Slimscroll -->
<?php echo Html::script('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>

<!-- FastClick -->
<?php echo Html::script('assets/plugins/fastclick/fastclick.js'); ?>

<!-- AdminLTE App -->
<?php echo Html::script('assets/dist/js/app.min.js'); ?>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php echo Html::script('assets/dist/js/pages/dashboard.js'); ?>

<!-- AdminLTE for demo purposes -->
<?php echo Html::script('assets/dist/js/demo.js'); ?>

<?php echo Html::script('assets/bootstrap/js/custom.js'); ?>


<?php /*autocompete*/ ?>
<script src="<?php echo e(asset('assets/bootstrap/typeahead/dist/bloodhound.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/bootstrap/typeahead/dist/typeahead.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/bootstrap/typeahead/dist/typeahead.jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/bootstrap/typeahead/dist/typeahead.jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/bootstrap/autocomplet/js/babylontypeahed.js')); ?>"></script>
<script src="<?php echo e(asset('assets/bootstrap/custom/auto.js')); ?>"></script>

<script type="text/javascript">
        $( "#date" ).daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
          });
</script>
</body>
</html>

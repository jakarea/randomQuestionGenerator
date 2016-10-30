<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <?php echo Html::image('assets/dist/img/user2-160x160.jpg','User Image',array('class'=>'img-circle')); ?>

                </div>
                <div class="pull-left info">
                    <p><?php echo Auth::user()->fullname; ?></p>
                    <?php
                    $role = Auth::user()->role;
                    if($role == 1){
                        $role = "Admin";
                    }elseif($role == 2){
                        $role = "Teacher";
                    }else{
                        $role='- - -';
                    }

                    ?>
                    <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $role; ?></a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Users  <small class="label pull-right bg-green">new</small></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo url('user'); ?>"><i class="fa fa-circle-o text-green"></i> All User</a></li>
                        <li><a href="<?php echo url('user/add'); ?>"><i class="fa fa-circle-o text-green"></i> Add User</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Courses</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo url('course'); ?>"><i class="fa fa-circle-o text-green"></i> All Course</a></li>
                        <li><a href="<?php echo url('course/create'); ?>"><i class="fa fa-circle-o text-green"></i> Add Course</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Questions</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo url('question'); ?>"><i class="fa fa-circle-o text-green"></i> All Question</a></li>
                        <li><a href="<?php echo url('question/create'); ?>"><i class="fa fa-circle-o text-green"></i> Add Question</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Question Generator</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo url('pdf'); ?>"><i class="fa fa-circle-o text-green"></i> All Pdf</a></li>
                        <li><a href="<?php echo url('pdf/generate'); ?>"><i class="fa fa-circle-o text-green"></i> Generate Pdf</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
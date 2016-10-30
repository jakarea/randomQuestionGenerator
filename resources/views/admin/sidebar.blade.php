<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    {!! Html::image('assets/dist/img/user2-160x160.jpg','User Image',array('class'=>'img-circle')) !!}
                </div>
                <div class="pull-left info">
                    <p>{!! Auth::user()->fullname !!}</p>
                    <?php
                    $role = Auth::user()->role;
                    if($role == 1){
                        $role = "Admin";
                    }elseif($role == 2){
                        $rol-e = "Teacher";
                    }else{
                        $role='- - -';
                    }
                    ?>
                    <a href="#"><i class="fa fa-circle text-success"></i> {!! $role !!}</a>
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
                        <li><a href="{!! url('user') !!}"><i class="fa fa-circle-o text-green"></i> All User</a></li>
                        @if(Auth::user()->role==1)
                        <li><a href="{!! url('user/add') !!}"><i class="fa fa-circle-o text-green"></i> Add User</a></li>
                        @endif
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Courses</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{!! url('course') !!}"><i class="fa fa-circle-o text-green"></i> All Course</a></li>
                         @if(Auth::user()->role==1)
                        <li><a href="{!! url('course/create') !!}"><i class="fa fa-circle-o text-green"></i> Add Course</a></li>
                        @endif
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Questions</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{!! url('question') !!}"><i class="fa fa-circle-o text-green"></i> All Question</a></li>
                        <li><a href="{!! url('question/create') !!}"><i class="fa fa-circle-o text-green"></i> Add Question</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Question Generator</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{!! url('pdf') !!}"><i class="fa fa-circle-o text-green"></i> All Pdf</a></li>
                        <li><a href="{!! url('pdf/generate') !!}"><i class="fa fa-circle-o text-green"></i> Generate Pdf</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
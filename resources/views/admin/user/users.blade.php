@extends('admin.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
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
                        <h3 class="box-title">All User</h3>
                            <form action ="user" method="Get" class="pull-right">
                                {!! Form::label('status', 'Active',array('class'=>'control-label')) !!}
                                {!! Form::radio('status', 'Active', false) !!}
                                {!! Form::label('status', 'Pending','required',array('class'=>'control-label')) !!}
                                {!! Form::radio('status', 'Pending', false) !!}
                                {!! Form::label('status', 'Blocked','required',array('class'=>'control-label')) !!}
                                {!! Form::radio('status', 'Blocked', false) !!}
                                <input type="text" name="key" placeholder="Name Or Email"><button type="submit" >Search</button>  
                            </form>
                    </div>
                <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <?php if(Auth::user()->role == 1):?>
                                        <th>Actions</th>
                                    <?php endif;?>
                                </tr>
                                @foreach($users as $user)
                                    <?php
                                    $role = $user->role;
                                    if($role == 1){
                                        $role = "Admin";
                                    }elseif($role == 2){
                                        $role = "Teacher";
                                    }else{
                                        $role='- - -';
                                    }
                                    ?>
                                    <?php
                                    $status = $user->status;
                                    if($status == 1){
                                        $status = "Active";
                                    }elseif($status == 0){
                                        $status = "Pending";
                                    }elseif($status == -1){
                                        $status="Block";
                                    }else{
                                        $status ='- - -';
                                    }
                                    ?>
                                <tr>
                                    <td> {!! $user->user_id !!}  </td>
                                    <td> {!! $user->fullname !!} </td>
                                    <td> {!! $user->email !!}    </td>
                                    <td> {!! $role !!}           </td>
                                    <td> {!! $status !!}         </td>
                                    <?php if(Auth::user()->role == 1):?>
                                        <td>
                                            <a href="{!! url('user/edit/'.$user->user_id) !!}"class="btn btn-sm bg-orange "><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                            <a href="{!! url('user/delete/'.$user->user_id) !!}" class="btn btn-sm bg-maroon" onclick="return confirm('Are you sure you want to delete this User?');"><i class="fa fa-trash" aria-hidden="true" ></i> Delete</a>
                                        </td>
                                    <?php endif;?>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-right">{!! $users->links() !!} </div>
                    </div>
                <!-- /.box-body -->
                </div>
            <!-- /.box -->
            </div>

        </div>
    </div>
@endsection
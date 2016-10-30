<?php
/**
 * Created by PhpStorm.
 * User: Jakarea
 * Date: 7/29/2016
 * Time: 4:50 AM
 */
?>

@extends('admin.layout')
@section('content')
<br>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Course</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(['route' => ['course.update',$course->course_id],'class' => 'form-horizontal','method' => 'PUT']) !!}
                    <div class="box-body">
                        <div class="form-group">
                            {!! Form::label('title', 'Course Title',array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                                {!! Form::text('title',$course->title,array('class' => 'form-control', 'placeholder' => 'eg: Algorithom')) !!}
                                {!! Form::hidden('course_id',null,array('id' => 'course_id')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('code', 'Course Code',array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                                {!! Form::text('code',$course->code,array('class' => 'form-control', 'placeholder' => 'eg: cse-121')) !!}
                            </div>
                        </div>


                        <div class="form-group">
                                {!! Form::label('credite', 'Course Credite',array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                                {!! Form::text('credite',$course->credite,array('class' => 'form-control', 'placeholder' => 'eg: 3')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                             {!! Form::label('status', 'Course Status',array('class'=>'col-sm-2 control-label')) !!}
                             <div class="col-sm-10">
                                <select name="status" required class="form-control">
                                  <option value="">--Select Status--</option>
                                  <option value="0" <?php if($course->status == 0) echo "selected";?>>InActive</option>
                                  <option value="1" <?php if($course->status == 1) echo "selected";?>>Active</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Submit</button>
                    </div>
                    <!-- /.box-footer -->
                {!! Form::close() !!}
            </div>
            <!-- /.box -->
                <!-- /.box-body -->
        </div>
            <!-- /.box -->
    </div>

@endsection

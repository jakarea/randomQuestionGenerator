<?php
/**
 * Created by PhpStorm.
 * User: Jakarea
 * Date: 7/27/2016
 * Time: 2:40 PM
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
                    <h3 class="box-title">Add New Course</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(['route' => 'course.store','class' => 'form-horizontal']) !!}
                    <div class="box-body">
                        <div class="form-group">
                            {!! Form::label('title', 'Course Title',array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                                {!! Form::text('title','',array('class' => 'form-control', 'placeholder' => 'eg: Algorithom')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('code', 'Course Code',array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                                {!! Form::text('code','',array('class' => 'form-control', 'placeholder' => 'eg: cse-121')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                                {!! Form::label('credite', 'Course Credite',array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                                {!! Form::text('credite','',array('class' => 'form-control', 'placeholder' => 'eg: 3')) !!}
                            </div>
                        </div>
                        @if(Auth::user()->role ==1)
                        <div class="form-group">
                             {!! Form::label('status', 'Course Status',array('class'=>'col-sm-2 control-label')) !!}
                             <div class="col-sm-10">
                                <select name="status" required class="form-control">
                                  <option value="">--Select Status--</option>
                                  <option value="0">InActive</option>
                                  <option value="1">Active</option>
                                </select>
                            </div>
                        </div>
                        @endif
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

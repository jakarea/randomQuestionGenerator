@extends('admin.layout')
@section('content')
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
                                    <td> {!! $question->question_id !!}</td>
                                    <td> {!! $question->course['title'] !!}</td>
                                    <td> {!! $question->question !!}</td>
                                    <td> {!! $question->mark !!}</td>
                                    <td> {!! $question->exam_type !!}</td>
                                    <td>
                                        <a href="{!! route('question.edit',$question->question_id) !!}"class="btn btn-sm bg-orange "><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                        {!! Form::open(array('route'=>['question.destroy',$question->question_id],'method'=>'delete')) !!} 
                                        {!! Form::hidden('id',$question->question_id)!!}
                                        {!! Form::submit('delete') !!}
                                        {!! Form::close() !!} 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

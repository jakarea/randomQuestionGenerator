@extends('admin.layout')
@section('content')
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
                        <h3 class="box-title">All Question</h3>
                        <form method="GET" action="/question" class="form-horizontal">
                            <div class="box-tools">
                                <div class="input-group input-group-sm">
                                    <input type="text" name="type" class="pull-right col-md-2" placeholder="Exam Type"> 
                                    <input type="text" name="title" class="pull-right col-md-2" placeholder="Course Title">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-sm"><i class="fa fa-search"></i> Search</button>
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
                                <th>Course</th>
                                <th>Question</th>
                                <th>Mark</th>
                                <th>Exam</th>
                                <th>status</th>
                                <th>Actions</th>
                            </tr>
                            @foreach($questions as $question)
                            <?php $prosno = substr($question->question,0,40);?>
                                <tr>
                                    <td> {!! $question->question_id !!}</td>
                                    <td> {!! $question->title !!}</td>
                                    <td> {!! $prosno. ". . . ?" !!}</td>
                                    <td> {!! $question->mark !!}</td>
                                    <td> {!! $question->exam_type !!}</td>
                                    <td> {!! $question->status !!}</td>
                                    <td>
                                         <a href="{!! route('question.show',$question->question_id) !!}" class="btn btn-sm bg-navy "><i class="fa fa-eye" aria-hidden="true"></i> Show</a>
                                        <a href="{!! route('question.edit',$question->question_id) !!}"class="btn btn-sm bg-orange "><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                         @if(Auth::user()->role ==1)
                                        {!! Form::open(array('route'=>['question.destroy',$question->question_id],'method'=>'delete')) !!} 
                                        {!! Form::hidden('id',$question->question_id)!!}
                                        {!! Form::submit('delete') !!}
                                        {!! Form::close() !!}    
                                        @endif                                
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">{!! $questions->links() !!} </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
@endsection

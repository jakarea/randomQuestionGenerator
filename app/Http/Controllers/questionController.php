<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;
use App\Course;


class questionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $input = $request->only(['type','title']);
        $type = $request->type;
        $title = $request->title;
        $questions=Question::join('courses','questions.course_id','=','courses.course_id')
        ->where('exam_type', 'LIKE', '%'.$type.'%')
        ->Where('title', 'LIKE', '%'.$title.'%');
        $questions = $questions->paginate(20);
        $questions->appends($input);
        return view('admin.question.questions',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function create()
    {
        return view('admin.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        Question::create($input);
        return redirect('question');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::with('course')->find($id);
        return view('admin.question.single',compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::with('course')->find($id);
        return view('admin.question.edit',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $data = Question::find($id);
        $data->update($input);
        return redirect('question');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Question::find($id);
        $data->delete($data);
        return redirect('question');
    }
}

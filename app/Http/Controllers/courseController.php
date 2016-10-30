<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Course;
use Auth;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $key = $request->input('key'); 
        $status = $request->input('status'); 
        $input = $request->only(['key','status']);
        $courses = Course::orderBy('course_id');
        if(!empty($key)){
            $courses->where('title','like','%'.$key.'%');
            $courses->orWhere('code','like','%'.$key.'%');
        }
        if(!empty($status)){
            if($status =="Active" ){
                $status = 1;
            }else{
                $status = 0;
            }
            $courses->where('status','like','%'.$status.'%');
        }
        $courses = $courses->paginate(12);
        $courses->appends($input);
        return view('admin.course.courses',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->role != 1){
            flash('You have no permission to delete.','warning');
            return redirect()->back();
        }
        $input=$request->all();
        Course::create($input);
        return redirect ('course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = course::find($id);
        return view('admin.course.editcourse',compact('course'));
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
        $data = Course::find($id);
        $data->update($input);
        return redirect('course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->role != 1){
            flash('You have no permission to delete this','warning');
            return redirect('course');
        }
        $data = Course::find($id);
        $data->delete($data);
        return redirect('course');
    }
}

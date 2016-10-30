<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;
use App\Course;
use App\Preview;
use \Auth;
use DB;
use PDF;


class questionGeneratorController extends Controller
{
    public function index(Request $request)

    {
        $key = $request->input('key'); 
        $allpdf = Preview::orderBy('preview_id','desc');
        if(!empty($key)){
            $allpdf->where('code','like','%'.$key.'%');
            $allpdf->orWhere('ct','like','%'.$key.'%');
        }

        $allpdf = Preview::paginate(12);
        return view('admin.generator.all',compact('allpdf'));
    }

    public function create(){
        return view('admin.generator.select');
    }

    public function show($id){
        $pdf = Preview::find($id);
        return view('admin.generate.single',compact('pdf'));
    }

    public function preview(Request $request)
    {
        $exam_type = $request->input('exam_type');
        $course_id = $request->input('course_id');
        $batch = $request->input('batch');
        $date = $request->input('date');
        $date = date("Y-d-m", strtotime($date));
        $time = $request->input('time');
        if (empty($exam_type) || empty($course_id) || empty($batch) || empty($date) || empty($time)) {
            flash('Please check all field','warning');
            return back()->withInput();
        }
        $allQuestion = Question::where('exam_type', '=', $exam_type)->where('course_id', '=', $course_id)->get()->toArray();
       $questions = $this->prepareQuestion($allQuestion);

        if ($exam_type == "Final") {
            $exam = "Final Examination";
        } else {
            $exam = "Mid Term Examination";
        }
        $m = date('M');
        if (in_array($m, ['Jan', 'Feb', 'Mar', 'Apr'])) {
            $trimister = "Spring " . date('Y');
        } elseif (in_array($m, ['May', 'un', 'Jul', 'Aug'])) {
            $trimister = "Summer " . date('Y');
        } else {
            $trimister = "Fall " . date('Y');
        }
        $course = Course::where('course_id', '=', $course_id)->take(1)->get();
        $title = $course[0]['title'];
        $credite = $course[0]['credite'];
        $code = $course[0]['code'];
        $question_id = session('ins');
        $head = [
            'exam_type' => $exam
            , 'title' => $title
            , 'credite' => $credite
            , 'code' => $code
            , 'trimister' => $trimister
            , 'batch' => $batch
            , 'exam_date' => $date
            , 'time' => $time
            , 'question_id' => $question_id
            , 'course_id' => $course[0]['course_id']
            , 'user_id' => Auth::user()->user_id
            ,'ct'=> Auth::user()->fullname
        ];
        $request->session()->forget('ins');
        session(['data' => $head]);
        if ($request->has('download')) {
            Pdfq::create($head);
            $pdf = PDF::loadView('admin.generator.preview',compact('questions', 'head'));
            return $pdf->download('pdfview.pdf');

        }
        return view('admin.generator.preview', compact('questions', 'head'));
    }

    public function prepareQuestion($allQuestion)
    {
        $total = count($allQuestion) - 1;
        $checkId = array();
        $questions = array();
        $ins = '';
        for ($i = 0; $i < 4; $i++) {
            $ind = 0;
            $marks = 0;
            $max = 10;
            $set = array();
            while (true) {
                $ind = rand(0, $total);
                if (!in_array($ind, $checkId)) {
                    if ($allQuestion[$ind]['mark'] <= $max) {
                        $checkId[] = $ind;
                        $set[] = $allQuestion[$ind];
                        $marks += $allQuestion[$ind]['mark'];
                        $ins .= $allQuestion[$ind]['question_id'] . ",";
                        $max = 10 - $marks;
                    }
                }
                if ($marks >= 10) {
                    $questions[] = $set;
                    break;
                }
            }
        }
        session(['ins' => $ins]);
        return $questions;
    }

    public function download(Request $request,$id=null)
    {
        $head=NULL;
         if(session('data')){
            $head = session('data');
            $request->session()->forget('data');
        }
       
        $mark = 0;
        $questions = array();
        $set = array();
        if($head){
            $pdf=Preview::create($head);
            $id =$pdf->preview_id;
        }
        $data = Preview::find($id);
          
        if(empty($head)) {
            $head['exam_type'] = $data->exam_type;
            $head['title'] = $data->title;
            $head['credite'] = $data->credite;
            $head['code'] = $data->code;
            $head['trimister'] = $data->trimister;
            $head['batch'] = $data->batch;
            $head['exam_date'] = $data->exam_date;
            $head['time'] = $data->time;
            $head['ct'] = $data->ct;
            $head['course_id'] = $data->course_id; 
        }
            $dd = explode(',',$data->question_id);
            $total = count($dd)-1;

            for($i=0;$i<$total;$i++){
                $set[$i] = Question::find($dd[$i]);
                $mark += $set[$i]['mark'];
                if($mark == 10){
                    $mark = 0;
                    $questions[]= $set;
                    $set = null;
                }
            }
            $pdf = PDF::loadView('admin.generator.preview_download',compact( 'head','questions'));
            $name = $head['title'].$head['batch'];
            if($head)
                unset($head);
            return $pdf->download($name.'.pdf');
        }
    public function delete($id=null){
        if(Auth::user()->role != 1){
            flash('You have no permission to delete.','warning');
            return redirect()->back();
        }
        $row = Preview::find($id);
        $row->delete();
        return redirect()->back();
    }

}
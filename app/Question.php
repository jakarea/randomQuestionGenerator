<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Course;

class Question extends Model
{
    protected $primaryKey = 'question_id';
    protected $fillable = ['question_id','course_id','question','mark','exam_type'];

    public function course(){
    	return $this->belongsTo('App\Course');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Question;
class Course extends Model
{
    protected $primaryKey = 'course_id';
    protected $fillable = ['code','title','credite','status'];

}

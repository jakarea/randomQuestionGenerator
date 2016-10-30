<?php
/**
 * Created by PhpStorm.
 * User: Jakarea
 * Date: 7/29/2016
 * Time: 1:41 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Preview extends Model
{
    protected $table = 'preview';
    protected $primaryKey = 'preview_id';
    protected $fillable = [
        'exam_type'
        ,'title'
        ,'credite'
        ,'code'
        ,'trimister'
        ,'batch'
        ,'exam_date'
        ,'time'
        ,'question_id'
        ,'course_id'
        ,'user_id'
        ,'ct'
        ];
}
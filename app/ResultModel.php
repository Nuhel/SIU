<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultModel extends Model
{
    //
     protected $fillable = [
        's_id',
        'semester',
        'exam_semester',
        'course_code',
        'course_title',
        'credit',
        'gpa',
        'grade',
        'remarks',
        'status',
        'should_show',
    
        // add all other fields
    ];
    protected $table = 'result_history';
}

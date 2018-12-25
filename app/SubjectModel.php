<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectModel extends Model
{
    //
     protected $fillable = [
        'course_title',
        'course_code',
        'course_credit',
        'discipline',
        'semester',
        'isActive',
    
        // add all other fields
    ];
    protected $table = 'Subjects';
}

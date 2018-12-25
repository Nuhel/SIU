<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentUser extends Model
{
    //
     protected $fillable = [
        's_id',
        'email',
        'password',
        'updateRequest',
        'status',
    
        // add all other fields
    ];
    protected $table = 'studentuser';
}

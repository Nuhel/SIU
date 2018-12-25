<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInfoModel extends Model
{
    //
    protected $fillable = [
        'student_name',
        'picture',
        'fathers_name',
        'mothers_name',
        'dob',
        'registration_number',
        'academic_year',
        'discipline',
        'roll_number',
        'doa',
        'emargency_contact_address',
        'emargency_contact_number',
        'permanent_address',
        'permanent_address_number',
        'mailing_address',
        'mailing_address_number',
        'legal_guardian_name',
        'legal_guardian_address',
        'legal_guardian_phone_number',
        'personal_email',
        'authorized_email',
        'isActive',
        

        // add all other fields
    ];
    protected $table = 'student_info';
}

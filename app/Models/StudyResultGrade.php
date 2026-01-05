<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyResultGrade extends Model
{
    protected $fillable = [
        'ststudy_result_id',
        'course_id',
        'later',
        'weight_of_value',
        'grade'
    ];  
}

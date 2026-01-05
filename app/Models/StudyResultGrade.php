<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyResultGrade extends Model
{
    protected $fillable = [
        'study_result_id',
        'course_id',
        'later',
        'weight_of_value',
        'grade'
    ];


    public function studyResult()
    {
        return $this->belongsTo(StudyResult::class, 'study_result_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo(StudyResult::class, 'course_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyResult extends Model
{
    protected $fillable = [
        'student_id',
        'academic_year_id',
        'semester',
        'gpa'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id', 'id');
    }

    public function grade()
    {
        return $this->hasMany(StudyResultGrade::class, 'study_result_id', 'id');
    }
}

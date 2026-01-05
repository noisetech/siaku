<?php

namespace App\Models;

use App\Enums\ScheduleDay;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'faculty_id',
        'departement_id',
        'course_id',
        'classrom_id',
        'academic_year_id',
        'start_time',
        'end_time',
        'day_of_week',
        'quote'
    ];

    public function casts(): array
    {
        return [
            'day_of_week' => ScheduleDay::class,
        ];
    }


    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'id');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function classRoom()
    {
        return $this->belongsTo(Course::class, 'classrom_id', 'id');
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id', 'id');
    }

    public function studyPlans()
    {
        return $this->belongsToMany(StudyPlan::class, 'study_plan_schedule')->withTimestamps();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'faculty_id',
        'departement_id',
        'teacher_id',
        'academic_year_id',
        'code',
        'name',
        'creadit',
        'semester'
    ];


    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'id');
    }

    public function depratement()
    {
        return $this->belongsTo(Departement::class, 'departement_id', 'id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id', 'id');
    }


    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'course_id', 'id');
    }

    public function grade(){
        return $this->hasMany(Grade::class, 'course_id', 'id');
    }
}

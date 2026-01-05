<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
        'faculty_id',
        'departement_id',
        'academic_year_id',
        'name',
        'slug',
    ];


    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'id');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id', 'id');
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id', 'id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'classroom_id', 'id');
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'classroom_id', 'id');
    }

    public function courses(){
        return $this->hasManyThrough(Course::class, Schedule::class, 'classroom_id', 'id', 'id', 'course_id');
    }
}

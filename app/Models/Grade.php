<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'course_id',
        'student_id',
        'classroom_id',
        'grade',
        'section',
        'category'
    ];

    public function coruse()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function classRoom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id', 'id');
    }
}

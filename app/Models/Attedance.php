<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attedance extends Model
{
    protected $fillable = [
        'course_id',
        'student_id',
        'classroom_id',
        'status',
        'section'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id', 'id');
    }
}

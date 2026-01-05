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
}

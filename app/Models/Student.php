<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id',
        'faculty_id',
        'departement_id',
        'classrom_id',
        'student_number',
        'semester',
        'batch',
        'fee_group_id',
    ];
}

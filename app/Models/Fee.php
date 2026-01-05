<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $fillable = [
        'fee_code',
        'student_id',
        'fee_group_id',
        'academic_year_id',
        'semester',
        'semester',
        'status'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function feeGroup()
    {
        return $this->belongsTo(FeeGroup::class, 'fee_group_id', 'id');
    }
}

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


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'id');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id', 'id');
    }

    public function classRoom()
    {
        return $this->belongsTo(User::class, 'classrom_id', 'id');
    }

    public function feeGroup()
    {
        return $this->belongsTo(FeeGroup::class, 'fee_group_id', 'id');
    }


    public function attedances()
    {
        return $this->hasMany(Attedance::class, 'student_id', 'id');
    }

    public function grade()
    {
        return $this->hasMany(Grade::class, 'student_id', 'id');
    }

    public function studyPlans()
    {
        return $this->hasMany(StudyPlan::class, 'student_id', 'id');
    }

    public function studyResults()
    {
        return $this->hasMany(StudyResult::class, 'student_id', 'id');
    }
}

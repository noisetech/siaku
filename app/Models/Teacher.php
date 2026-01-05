<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'user_id',
        'faculty_id',
        'departement_id',
        'name',
        'teacher_number',
        'academic_title',
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
}

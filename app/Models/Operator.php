<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $fillable = [
        'user_id',
        'faculty_id',
        'departement_id',
        'empployee_number',
        'name'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'id');
    }

    public function departement(){
        return $this->belongsTo(Departement::class, 'departement_id', 'id');
    }
}

<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = [
        'name',
        'faculty_id',
        'code',
        'slug'
    ];


    public function code(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => strtoupper($value),
            set: fn(string $value) => strtolower($value)
        );
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'id');
    }
}

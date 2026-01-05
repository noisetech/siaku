<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'name',
        'code',
        'logo',
        'slug'
    ];

    public function code(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => strtoupper($value),
            set: fn(string $value) => strtolower($value)
        );
    }
}

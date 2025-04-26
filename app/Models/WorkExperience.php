<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $fillable = [
        'year',
        'work_at',
        'as',
        'paragraph',
        'list',
    ];

    protected $casts = [
        'list' => 'string',
    ];
}

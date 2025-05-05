<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural of the model name
    // protected $table = 'educations';

    // Specify fillable fields for mass assignment
    protected $fillable = ['year', 'institution', 'major'];
}

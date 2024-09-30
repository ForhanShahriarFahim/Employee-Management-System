<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    // Specify which attributes should be mass assignable
    protected $fillable = [
        'name',
        'email',
        'mobile_no',
        'address',
        'joining_date',
        'salary',
        'job_title'
    ];
}

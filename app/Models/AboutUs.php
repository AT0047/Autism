<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'dr_name',
        'job_specialization',
        'phone_number',
        'email',
        'title',
        'description',
        'dr_photo',
    ];

}

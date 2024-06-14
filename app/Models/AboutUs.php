<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'ar_drName',
        'en_drName',
        'ar_job_specialization',
        'en_job_specialization',
        'phone_number',
        'email',
        'ar_title',
        'en_title',
        'ar_description',
        'en_description',
        'dr_photo',
        'ar_address',
        'en_address',
        'ar_footer_description',
        'en_footer_description',

    ];

}

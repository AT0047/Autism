<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutExperience extends Model
{
    use HasFactory;
    protected $table = 'about_experience';

    protected $fillable = [
        'ar_title',
        'en_title',
        'ar_place',
        'en_place',
        'date',
        'ar_description',
        'en_description',
    ];
}

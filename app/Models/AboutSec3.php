<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSec3 extends Model
{
    use HasFactory;
    protected $table = 'about_sec3'; 
    protected $fillable = [
        'ar_title',
        'en_title',
        'ar_description',
        'en_description',
        'photo',
    ];
}

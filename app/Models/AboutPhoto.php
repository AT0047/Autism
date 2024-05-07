<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPhoto extends Model
{
    use HasFactory;
    protected $table = 'about_photos'; 
    protected $fillable = [
        'sec1_video',
        'sec1_photo',
        'sec2_photo',
        'sec4_photo',
        'logo',
    ];
}

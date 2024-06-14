<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

    public $fillable= [
    'ar_title',
    'en_title',
    'ar_description',
    'en_description',
    // 'place',
    'ar_photo',
    'en_photo',
    'home_photo',
];

}

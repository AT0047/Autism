<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurService extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'ar_title',
        'en_title',
        'ar_description',
        'en_description',
    ];
}

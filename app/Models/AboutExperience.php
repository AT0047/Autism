<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutExperience extends Model
{
    use HasFactory;
    protected $table = 'about_experience';

    protected $fillable = ['title', 'place', 'description'];

}

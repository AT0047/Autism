<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutEducation extends Model
{
    use HasFactory;
    protected $table = 'about_education';

    protected $fillable = ['title', 'place', 'description'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleStory extends Model
{
    use HasFactory;
    protected $fillable = [
        'ar_name',
        'en_name',
        'ar_job',
        'en_job',
        'ar_title',
        'en_title',
        'ar_content',
        'en_content',
        'photo',
    ];}

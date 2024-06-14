<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyStory extends Model
{
    use HasFactory;
    public $table ='my_stories';
    protected $fillable = [
        'ar_title1',
        'en_title1',
        'ar_title2',
        'en_title2',
        'ar_content',
        'en_content',
        'photo1',
        'photo2',
        'photo3',
    ];}

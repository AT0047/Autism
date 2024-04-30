<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyStory extends Model
{
    use HasFactory;
    public $fillable = ['title1', 'title2', 'content', 'photo'];
}

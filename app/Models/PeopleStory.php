<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleStory extends Model
{
    use HasFactory;
    public $fillable = ['name', 'job', 'title', 'content', 'photo'];
}

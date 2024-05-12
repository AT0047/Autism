<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSec4 extends Model
{
    use HasFactory;

    protected $table = 'about_sec4';

    protected $fillable = [
        'name', 'title', 'description',
    ];
}

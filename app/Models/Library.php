<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;
    public $fillable = ['name'];
    public function categories(){
        return $this->hasMany(Category::class);
    }
}

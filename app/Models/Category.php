<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $fillable = ['name', 'library_id'];
    public function library(){
        return $this->belongsTo(Library::class);
    }
    public function books(){
        return $this->hasMany(Book::class);
    }
}

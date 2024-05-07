<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $fillable = ['name', 'content', 'category_id', 'prefer', 'video', 'photo', 'publication_date', 'author_name'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function questions(){
        return $this->hasMany(BookQuestion::class);
    }
}

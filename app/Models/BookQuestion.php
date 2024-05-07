<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookQuestion extends Model
{
    use HasFactory;
    public $fillable = ['question', 'answer', 'book_id'];
    public function book(){
        return $this->belongsTo(Book::class);
    }
}


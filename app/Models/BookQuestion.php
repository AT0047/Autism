<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookQuestion extends Model
{
    use HasFactory;
    protected $fillable = [
        'ar_question',
        'en_question',
        'ar_answer',
        'en_answer',
        'book_id',
    ];
    public function book(){
        return $this->belongsTo(Book::class);
    }
}


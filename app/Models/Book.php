<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $fillable = [
        'ar_name',
        'en_name',
        'ar_content',
        'en_content',
        'category_id',
        'prefer',
        'video',
        'photo',
        'publication_date',
        'ar_author_name',
        'en_author_name',
        'display_order',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function questions(){
        return $this->hasMany(BookQuestion::class);
    }
}

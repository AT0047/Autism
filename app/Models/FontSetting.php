<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FontSetting extends Model
{
    use HasFactory;
    protected $table = 'font_settings';
    protected $fillable = [
        'ar_font_family',
        'ar_font_size',
        'en_font_family',
        'en_font_size',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImageSlider extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'speed', 'number', 'heading', 'sub_heading',
        'body_text', 'images', 'images2', 'images3', 'images4',
        'heading2', 'heading3', 'heading4',
        'sub_heading2', 'sub_heading3', 'sub_heading4',
        'body_text2','body_text3','body_text4'
    ];
}

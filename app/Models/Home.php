<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'description',
        'news_type',
        'category',
        'image_path',
    ];
}

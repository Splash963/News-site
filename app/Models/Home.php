<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'title',
        'description',
        'news_type',
        'category',
        'image_path',
    ];
}

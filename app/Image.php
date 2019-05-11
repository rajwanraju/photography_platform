<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
           protected $fillable = [
        'title','photographerId', 'categoryId', 'albumId','description', 'image', 'location',
    ];
}

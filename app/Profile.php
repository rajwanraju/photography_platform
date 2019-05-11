<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     protected $fillable = [
        'photographerId', 'facebookId', 'instagramId','bio', 'image', 'location',
    ];



    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

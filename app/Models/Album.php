<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function gallery()
    {
        return $this->hasMany('App\Models\Album_gallery');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article_file extends Model
{
    public function gallery()
    {
        return $this->hasMany('App\Models\Article_gallery');
    }
}

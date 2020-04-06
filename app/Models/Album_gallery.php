<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album_gallery extends Model
{
    public function albums()
    {
        return $this->belongsTo('App\Models\Album','album_id');

    }
}

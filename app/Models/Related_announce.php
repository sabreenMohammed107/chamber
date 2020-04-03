<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Related_announce extends Model
{
   
    public function relatedannounce()
    {
        return $this->belongsTo('App\Models\Announcement','related_announce_id');
    }
}

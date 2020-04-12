<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Announcement extends Model
  {
   
   
    public function gallery()
    {
        return $this->hasMany('App\Models\Announce_gallery','announce_id','id');
    }


    
}

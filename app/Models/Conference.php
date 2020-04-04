<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    public function gallery()
    {
        return $this->hasMany('App\Models\Conference_gallery','conference_id','id');
    }
}

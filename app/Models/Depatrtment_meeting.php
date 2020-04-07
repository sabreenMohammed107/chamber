<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Depatrtment_meeting extends Model
{
    public function gallery()
    {
        return $this->hasMany('App\Models\Depatrtment_meeting_gallery','department_meeting_id');
    }

}

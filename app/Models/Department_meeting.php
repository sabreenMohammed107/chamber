<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Department_meeting extends Model
{

    public function gallery()
    {
        return $this->hasMany('App\Models\Department_meeting_gallery','department_meeting_id');
    }

}

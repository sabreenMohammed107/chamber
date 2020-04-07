<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Department_news extends Model
{

    
    public function gallery()
    {
        return $this->hasMany('App\Models\Department_gallery','department_news_id');
    }
}

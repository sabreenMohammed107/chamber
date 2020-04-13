<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Woman_activity extends Model
{
    public function gallery()
    {
        return $this->hasMany('App\Models\Wactivity_gallery','activity_id','id');
    }


    public function relatednews()
    {
        return $this->hasMany('App\Models\Woman_activity','related_activity_id');
    }
}

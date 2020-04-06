<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board_director extends Model
{
    //
    public function ccc()
    {
        return $this->hasMany('App\Models\Board_member','board_directors_id','id');

    }
}

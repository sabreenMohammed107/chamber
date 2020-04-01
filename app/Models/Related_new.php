<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Related_new extends Model
{
    public function relatednews()
    {
        return $this->belongsTo('App\Models\News','related_news_id');
    }
}

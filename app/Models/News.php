<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function gallery()
    {
        return $this->hasMany('App\Models\News_gallery');
    }


    public function relatednews()
    {
        return $this->hasMany('App\Models\News','related_news_id');
    }
}

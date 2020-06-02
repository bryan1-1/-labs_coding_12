<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function tags()
    {
    	return $this->belongsToMany('App\Tag','article_tag')->withTimestamps();
    }
    public function reaction(){
        return $this->hasMany('App\Reaction');
    }
    
}

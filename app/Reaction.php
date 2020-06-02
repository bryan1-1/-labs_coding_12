<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    public function articles(){
        return $this->belongsTo('App\Article','article_id');
    }
}

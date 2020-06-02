<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    public function service(){
        return $this->hasMany(Service::class);
    }
}

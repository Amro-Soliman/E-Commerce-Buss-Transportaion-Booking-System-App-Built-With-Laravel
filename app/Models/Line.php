<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    //
    public function trips()
    {
        return $this->hasMany('App\Models\Trip');
    }
    public function stations()
    {
        return $this->belongsToMany('App\Models\Station');
    }

}

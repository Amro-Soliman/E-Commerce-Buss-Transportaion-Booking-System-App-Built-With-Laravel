<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    public function stations()
    {
        return $this->hasMany('App\Models\Station');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //

    public function locations()
    {
        return $this->hasMany('App\Models\Location');
    }

    public function operators()
    {
        return $this->hasMany('App\Models\Operator');
    }
}

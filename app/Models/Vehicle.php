<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    public function operates()
    {
        return $this->hasMany('App\Models\Operate');
    }

    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket');
    }
}

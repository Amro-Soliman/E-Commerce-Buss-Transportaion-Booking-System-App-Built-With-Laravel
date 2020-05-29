<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    //
    public function plans()
    {
        return $this->hasMany('App\Models\Plan');
    }
    public function lines()
    {
        return $this->hasMany('App\Models\Line');
    }
}

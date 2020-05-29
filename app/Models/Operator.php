<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    //
    public function lines()
    {
        return $this->hasMany('App\Models\Line');
    }

        public function vehicles()
        {
            return $this->hasMany('App\Models\Vehicle');
        }
    
}

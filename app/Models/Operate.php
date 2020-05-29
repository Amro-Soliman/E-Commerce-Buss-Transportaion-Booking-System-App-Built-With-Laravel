<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operate extends Model
{
    //

    public function vehicle(){

        
        
            return $this->belongsTo('App\Models\Vehicle');
        
    }
}

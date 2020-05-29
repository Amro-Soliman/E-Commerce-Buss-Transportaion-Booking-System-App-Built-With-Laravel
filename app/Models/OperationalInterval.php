<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperationalInterval extends Model
{
    //
    public function trips()
    {
        return $this->hasMany('App\Models\Trip');
    }

}

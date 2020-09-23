<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    public function drivers()
    {
        return $this->belongsToMany('App\Driver', 'driver_trucks')->withTimeStamps();
    }
}

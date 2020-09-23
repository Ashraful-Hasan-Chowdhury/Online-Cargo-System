<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function drivers()
    {
        return $this->belongsToMany('App\Driver', 'order_drivers')->withTimeStamps();
    }
}

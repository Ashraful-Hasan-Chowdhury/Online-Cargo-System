<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    public function prices()
    {
        return $this->belongsToMany('App\Price', 'good_prices')->withTimeStamps();
    }
}

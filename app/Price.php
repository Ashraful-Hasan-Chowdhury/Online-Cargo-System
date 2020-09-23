<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function goods()
    {
        return $this->belongsToMany('App\Good', 'good_prices')->withTimeStamps();
    }
}

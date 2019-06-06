<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    public function state()
    {
        return $this->belongsTo("App\State", 'state_id');
    }

    public function posts()
    {
        return $this->hasManyThrough('App\State', 'App\Country');
    }

}

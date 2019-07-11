<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //
    public function category()
    {
       //obtiene la categoria padre
        return $this->belongsTo('App\Category','category_id');
    }
}

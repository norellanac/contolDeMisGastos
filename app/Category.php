<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function subcategory()
    {
       //obtiene las subcategorias
        return $this->hasMany('App\Subcategory');
    }
}

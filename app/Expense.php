<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    //
    public function subCat()
    {
        return $this->belongsTo("App\Subcategory", 'subcategory_id');
    }
}

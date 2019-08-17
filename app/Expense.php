<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    //
    use SoftDeletes;

    protected $table = 'expenses';
    protected $softDelete = true;

    public function subCat()
    {
        return $this->belongsTo("App\Subcategory", 'subcategory_id');
    }
}

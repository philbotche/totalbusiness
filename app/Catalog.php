<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    //get all products of the catalog
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}

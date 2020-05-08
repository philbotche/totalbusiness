<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //get all products with or without categorie
    public function catalog()
    {
        return $this->belongsToMany('App\Catalog');
    }
}

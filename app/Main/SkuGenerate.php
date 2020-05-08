<?php
// Generate sku

namespace App\Main;

use App\Product;

class SkuGenerate
{
    static public function generate()
    {

        do{
            $bytes = random_bytes(5);
            $sku = strtoupper(bin2hex($bytes));
            $query = Product::where('sku', $sku)->get();
            $testing = isset($query[0]->price) ? true : false;
        }while($testing);

        return  $sku;
    }
}

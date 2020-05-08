<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Product;
use Illuminate\Http\Request;

//This controller show the front of application
class FrontController extends Controller
{
    //Home page
    public function index()
    {
        //Catalogs
        $categories = Catalog::all();
        //take 15 products with their categories
        $product =new Product();
        $products = $product::orderBy('id', 'desc')->take(15)->get();

        return view('index', ['categorie'=>$categories, 'products'=>$products]);
    }

    // Page of the Categories
    public function category($slug)
    {
        $category = Catalog::where('slug', $slug)->first();

       $product_cat = $category->products;

       return view('category', ['product_cat'=>$product_cat]);
    }

    //Single product page,  skow by sku
     public function single_product($sku)
     {
         $product = Product::where('sku', $sku)->first();
         return view('single_product', ['product'=> $product]);
     }
}

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
        $products = $product::all();

        return view('index', ['categorie'=>$categories, 'products'=>$products]);
    }

    // Page of the Categories
    public function category($slug)
    {
        $category = Catalog::where('slug', $slug)->first();

       $product_cat = $category->products;

       return view('category', ['product_cat'=>$product_cat]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//This controller show the front of application
class FrontController extends Controller
{
    //Home page
    public function index()
    {
        return view('layout');
    }
}

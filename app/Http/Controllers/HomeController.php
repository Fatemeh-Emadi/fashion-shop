<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
  function index()
  {
    $products=Product::all()->sortBy('updated_at')->take(3);
    $categories=Category::all();
   
      return view('index',[
        "products"=>$products,
         "categories"=>$categories
         ]);
  }
  
  function shop_single()
  {
    return view('shop-single'); 
  }
  function about()
  {
    return view('about'); 
  }
  function contact()
  {
    return view('contact'); 
  }
}

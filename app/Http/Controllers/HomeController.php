<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  function index()
  {
      return view('index');
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

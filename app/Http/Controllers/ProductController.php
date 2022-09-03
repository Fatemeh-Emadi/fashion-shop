<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class ProductController extends Controller
{
    function shop()
    {
        $products=Product::all();
        $categories=Category::all();
        return view("shop",[
       "products"=>$products,
        "categories"=>$categories
        ]);
    }
    function index($id)
    {
     
      //$product= Product::find($id);
      $product=Product::join('images','products.id','=','images.product_id')->get(['products.*','images.url'])->find($id);
      
     //$informations=Information::where('product_id','=',1);
     //$product=Product::join('images','products.id','=','images.product_id')->join('informations','products.id','=','informations.product_id')->get(['products.*','images.url','informations.title','informations.value'])->find($id);
        return view("shop-single",[
            "product"=>$product,
            
 
        ]);
    }
    function get_by_category($id)
    {    
       // $categories=Category::all();
     //  $products=Product::where("category_id","=",$id);
     $category=Category::with('products')->where('id',$id)->first();
        return view("products",[
            "category"=>$category,
           // "products"=>$products
 
        ]);
    }
}

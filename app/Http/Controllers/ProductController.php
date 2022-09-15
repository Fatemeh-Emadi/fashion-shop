<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use App\Models\Star;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class ProductController extends Controller
{
    function shop()
    {
        $products=Product::paginate(12);
       
        
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
    function add_rating(Request $request){
        $stars=Star::where("user_id","=",Auth::id())->where("product_id","=",$request["product_id"]);
        if($stars->count()==0)
        {
            $star=new Star();
            $star->user_id=Auth::id();
            $star->product_id=$request["product_id"];
            $star->score=$request["score"];
            $star->save();
        }
        else
        {
          $star= $stars->first();
          $star->score=$request["score"];
          $star->update();
  
  
        }
        return "ok";
       
      }
     
    function add_get()
    {
        //$products=Product::all();
        $categories=Category::all();
        return view("admin.add_product",[
       // "products"=>$products,
        "categories"=>$categories
        ]);
    }
    function add_post(Request $request)
    {
        $new_product=new Product();
        $new_product->name=$request["name"];
        $new_product->description=$request["description"];
        $new_product->price=$request["price"];
        $new_product->price_off=$request["price_off"];
        $new_product->count=$request["count"];
        $new_product->category_id=$request["category_id"];
        $new_product->save();
      //  $new_image=new Image();
       // $new_image->url=$request["image"];
      //  $new_product->images()->save($new_image);
        return redirect("/admin/products");
    }
    function edit_get($id)
    {
        $product=Product::find($id);
        return view("admin.edit_product",[
            "product"=>$product
        ]);
    }
    function edit_post(Request $request)
    {
        $product=Product::find($request["id"]);
        $product->name=$request["name"];
        $product->description=$request["description"];
        $product->price=$request["price"];
        $product->price_off=$request["price_off"];
        $product->category_id=$request["category"];
        $product->count=$request["count"];
        $product->update();
        return redirect("/admin/products");
    }


    function delete($id)
    {
        $product=Product::find($id);
        if(!$product) 
        {
          $message_type="danger"; 
          $message="پیدا نشد" ;
        }
        else{
            $product->delete();
            $message_type="success"; 
            $message="با موفقیت حذف شد" ;
        }

        return redirect("/admin/products")->with([
            "message"=>$message,
            "message_type"=>$message_type
        ]); 
    }
    function get_all()
    {   $products=Product::all();
        
        //$products=DB::table('products')->join('images','products.id','=','images.product_id')->select('products.*', 'images.url')
        //->get();;
        return view("admin.products",[
            "products"=>$products
        ]);
    }
}

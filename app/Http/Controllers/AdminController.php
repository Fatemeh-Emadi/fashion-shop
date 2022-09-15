<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    //
    function index()
    {
       $count= Product::count();
       Session::put("count",$count);
       $count1= User::count();
       Session::put("count1",$count1);
       $carts= Cart::all();
       $sum=0;
       foreach($carts as $cart){
       $sum=$cart->product->price +$sum;
       }
       Session::put("count2",$sum);
        return view("admin.index",[
            "count"=>$count
        ]);
    }
    function admin_login_get()
    {
        return view("admin.login");  
    }

    function admin_login_post(Request $request)
    {
       
        
         // $username=$request["username"];
         // $password=$request["password"];
          
      if(Auth::attempt(["username"=>$request["username"],"password"=>$request["password"],'role'=>"1"])){
          
            return redirect("/admin")->with([
                "message"=>"شما با موفقیت وارد حساب کاربری خود شدید"
            ]

            );
        
        }
        else{
            return redirect("/login-admin")->with([
                "message"=>"ایمیل یا گذرواژه به درستی وارد نشده است"
            ]

            );
        }
    }
    function logout()
    {
       Auth::logout();
       return redirect("/");
    }
}

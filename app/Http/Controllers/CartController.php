<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Cart;


class CartController extends Controller
{
    function get_all()
    {
        $carts = Cart::all();

        return view("admin.carts", [
            "carts" => $carts,
        ]);
    }

    function get()
    {
        $carts = Auth::user()->carts;
        $user=Auth::user();
        $name=$user['name'];
        Session::put("name",$name);
        $email=$user['email'];
        Session::put("email",$email);
        $mobile=$user['mobile_number'];
        Session::put("mobile",$mobile);
        $city=$user->city->name;
        Session::put("city",$city);
        $address=$user["address"];
        Session::put("address",$address);
        return view('cart')->with([
            "carts" => $carts
        ]);
    }

    function add(Request $request)
    {
        
        $carts=Cart::where("user_id","=",Auth::id())->where("product_id","=",$request["product_id"]);
        if($carts->count()==0)
        {
            $new_cart= new Cart();
            $new_cart->product_id=$request["product_id"];
            $new_cart->user_id=Auth::id();
            $new_cart->count=$request["count"];
            $new_cart->size=$request["product-size"];
            $new_cart->save();
           
        }
        return redirect("/cart");

    }
    function delete($id)
    {
        $cart=Cart::find($id);
        if(!$cart) 
        {
          $message_type="danger"; 
          $message="Not Found" ;
        }
        else{
            $cart->delete();
            $message_type="success"; 
            $message="Delete Successfully" ;
        }

        return redirect("/cart")->with([
            "message"=>$message,
            "message_type"=>$message_type
        ]); 
    }
}

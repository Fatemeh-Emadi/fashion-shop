@extends('template')
@section('content')

<div class="row justify-content-center alighn-items-center ">
<div class="col-4 mt-5 ms-5 border rounded">
     <center><h4 class="mt-3 text-secondary" ><i class="bi bi-person-circle"></i> {{session("name")}}</h4></center> 
       <p  class="mt-3 text-secondary"><b>Email:</b> {{session("email")}}</p>
       <p class="text-secondary"><b>Mobile:</b> 0{{session("mobile")}}</p>
       <p class="text-secondary"><b>City:</b> {{session("city")}}</p>
       <p class="text-secondary"><b>Address:</b> {{session("address")}}</p>
    </div>
    
</div>
<div class="row mt-5 mb-5 ">
    

    <div class="col-8 ms-5 mt-5 mb-5">
    <h2 class="text-danger">Your Cart</h2>
    <table class="table border text-secondary" style="background-color: white;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Price Off</th>
      <th scope="col">Count</th>
      <th scope="col">Size</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      @php $i=1;  @endphp
    <tr>
        @foreach($carts as $cart)
      <th scope="row">{{$i++}}</th>
      
      <td>{{$cart->product->name}}</td>
      <td>${{$cart->product->price}}</td>
      <td>${{$cart->product->price_off}}</td>
      <td>{{$cart->count}}</td>
      <td>{{$cart->size}}</td>
      <td><a href="/cart/delete/{{$cart->id}}"><i class="bi bi-trash text-danger"></i><a></td>
    </tr>
   @endforeach
  </tbody>
</table>
@php 
$sum=0; 
foreach($carts as $cart){
    $sum=$cart->product['price_off']+$sum;

}

@endphp
<p>Total Price:${{$sum}}</p>
    </div>
   

</div>




@endsection
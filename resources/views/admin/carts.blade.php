@extends('admintemplate')
@section('content')

<div class="row mt-5 mb-5 ">
    <div class="col-8 ms-5 mt-5 mb-5">
    <table class="table border " style="background-color: white;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
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
      <td>{{$cart->user->name}}</td>
      <td>{{$cart->product->name}}</td>
      <td>${{$cart->product->price}}</td>
      <td>{{$cart->count}}</td>
      <td>{{$cart->size}}</td>
      <td><a href="/cart/delete/{{$cart->id}}"><i class="bi bi-trash text-danger"></i><a></td>
    </tr>
   @endforeach
  </tbody>
</table>

    </div>

</div>




@endsection
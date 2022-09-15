@extends('admintemplate')
@section('content')
<div class="row d-flex justify-content-between">
    <div class="col-4 mt-5">
    <div class="card" style="width: 18rem;">

  <div class="card-body  " >
   <Center><h5 class="card-title">Total Products</h5></Center> 
   <div class="d-flex align-items-center justify-content-center" >
        <div class="card-icon2 rounded-circle d-flex align-items-center justify-content-center" style="height: 80px; width:80px;"> <i class="bi bi-cart"></i>  <p class="card-text ms-1">{{(session("count"))}}</p></div>
       
        </div>
  
    
   
   <Center> <a href="/admin/products" class="btn  mt-4" style="background-color:#4154f1 ; color:white;">View Products</a></Center> 
  </div>
</div>
    </div>
    <div class="col-4 mt-5">
    <div class="card" style="width: 18rem;">

  <div class="card-body">
  <Center>  <h5 class="card-title">Customers</h5></Center> 
  <div class="d-flex align-items-center justify-content-center" >
        <div class="card-icon1 rounded-circle d-flex align-items-center justify-content-center" style="height: 80px; width:80px;"> <i class="bi bi-people"></i><p class="card-text ms-1 "> {{(session("count1"))}}</p></div>
       
        </div>
  
    
    
  <Center>   <a href="/admin/users" class="btn  mt-4" style="background-color:#ff771d ; color:white;">View Customers</a></Center> 
  </div>
</div>
    </div>
    <div class="col-4 mt-5 ">
    <div class="card " style="width: 18rem;">

  <div class="card-body">
  <Center>   <h5 class="card-title">Revenue</h5></Center> 
   
    <div class="d-flex align-items-center justify-content-center" >
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="height: 80px; width:80px;"> <i class="bi bi-currency-dollar"></i>  <p class="card-text ">{{(session("count2"))}}</p></div>
       
        </div>
  <Center>  <a href="/admin/carts" class="btn  mt-4" style="background-color:#2eca6a ;  color:white;">View Carts</a></Center> 
  </div>
</div>
    </div>

</div>
@endsection
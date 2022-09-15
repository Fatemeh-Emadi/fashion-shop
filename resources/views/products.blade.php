@extends('template')
@section('content')



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            

            <div class="col-lg">
               <h3 class="mb-5" style="color: pink;"> {{$category->title}} clothes</h3>
                <div class="row">
                   
                  @foreach($category->products as $product)
                    <div class="col-md-4 ">
                        
                       
                        <div class="card mb-4 product-wap rounded-0" >
                            <div class="card rounded-0" >
                                <img class="card-img rounded-0 img-fluid" src="../{{$product->images->first()->url}}" >
                               
                            </div>
                            <div class="card-body">
                                <a href="{{url("product/{$product->id}")}}" class="h3 text-decoration-none">{{$product->description}}</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">${{$product->price}} </p>
                            </div>
                        </div>
                        
                    </div>
                    @endforeach
                </div>
               

            </div>

        
    
    <!-- End Content -->

    <!-- Start Brands -->
 
            </div>
    </div>
    <!--End Brands-->
@endsection
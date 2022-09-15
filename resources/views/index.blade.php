

@extends('template')
@section('content')
    <!-- Modal -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\s7.jpg" class="d-block " alt="..." height="520px" width="100%">
      <div class="carousel-caption d-none d-md-block">
        <h5>Being Stylish With Us</h5>
        <p>Fashion Shop is the best shop for clothes.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\s2.jpg" class="d-block " alt="..." height="520px" width="100%">
      <div class="carousel-caption d-none d-md-block">
        <h5>For Everybody</h5>
        <p>Every brands and categories </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\s5.jpg" class="d-block " alt="..." height="520px" width="100%">
      <div class="carousel-caption d-none d-md-block">
        <h5>On Sale 50%</h5>
        <p>Our products on sale every week</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev border-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next border-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories</h1>
               
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src="img/Women (1).png" class="rounded-circle img-fluid border">
                <h5 class="text-center mt-3 mb-3">Wemon</h5>
                <p class="text-center"><a class="btn btn-success" href="../category/1">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="img/man.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Men</h2>
                <p class="text-center"><a class="btn btn-success" href="../category/2">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="img/e.png" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Kids</h2>
                <p class="text-center"><a class="btn btn-success" href="../category/3">Go Shop</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section style="background-color:beige;">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">New Products</h1>
                   
                </div>
            </div>
            <div class="row">
            @foreach($products as $product)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="{{$product->images->first()->url}}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">${{$product->price}}</li>
                            </ul>
                            <a href="product/{{$product->id}}" class="h2 text-decoration-none text-dark">{{$product->name}}</a>
                            <p class="card-text">
                            {{$product->description}}
                            </p>
                            <p class="text-muted">Reviews {{$product->comments->count()}}</p>
                        </div>
                    </div>
                </div>
              @endforeach 
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
@endsection

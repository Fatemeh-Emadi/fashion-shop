@extends('template')
@section('content') 
    <!-- Open Content -->
    <section >
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{url($product->url)}}" alt="Card image cap" id="product-detail" >
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card" style=" height:600px">
                        <div class="card-body">
                            <h1 class="h2">{{$product->name}}</h1>
                            <p class="h3 py-2">${{$product->price}}</p>
                            <p class="py-2">
                               
                            <div class="stars"  onmouseout="clear_rate()">
                            Rate:
                    <i class="bi bi-star text-warning rating" onmouseover="draw_rating(1)" onclick='add_rating(1, {{ $product->id }}, "{{ csrf_token() }}")'></i>
                    <i class="bi bi-star text-warning rating" onmouseover="draw_rating(2)" onclick='add_rating(2, {{ $product->id }}, "{{ csrf_token() }}")'></i>
                    <i class="bi bi-star text-warning rating" onmouseover="draw_rating(3)" onclick='add_rating(3, {{ $product->id }}, "{{ csrf_token() }}")'></i>
                 <i class="bi bi-star text-warning rating" onmouseover="draw_rating(4)" onclick='add_rating(4, {{ $product->id }}, "{{ csrf_token() }}")'></i>
                 <i class="bi bi-star text-warning rating" onmouseover="draw_rating(5)" onclick='add_rating(5, {{ $product->id }}, "{{ csrf_token() }}")'></i>
                                
                            </p>
                            <div>
                        <i class="bi bi-star-fill text-warning"></i>
                            <span class="list-inline-item text-dark">Rating {{ $product->stars->avg("score") }}
                                    | {{ $product->comments->count()}} comments
                                    
                                 </span></div>
                        </div>
                        
                            <ul class="list-inline mt-3">
                            @foreach($product->informations as $information)
                                <li class="list-inline-item">
                                    <h6>Brand:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{$information->brand}}</strong></p>
                                </li>
                                @endforeach
                            </ul>

                            <h6>Description:</h6>
                            <p>{{$product->description}}</p>
                            <ul class="list-inline">
                            @foreach($product->informations as $information)
                                <li class="list-inline-item">
                                    <h6>Color :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{ $information->color}}</strong></p>
                                </li>
                            @endforeach
                            </ul>

                     

                            <form action="/add-to-cart" method="post">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                             @foreach($product->informations as $information)
                                             @if($information->Small==1)
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">S</span></li>
                                            @endif
                                            @if($information->Medium==1)
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                                            @endif
                                            @if($information->Large==1)
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">L</span></li>
                                            @endif
                                            @if($information->Xlarge==1)
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span></li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                               
                                                <input type="hidden" name="count" id="product-quanity" value="1" >
                                               
                                                
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value" >1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                  
                                <input type="hidden" value="{{$product->id}}" name="product_id">
                                    <div class="col d-flex justify-content-center align-items-center">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}" >
                                        <button  class="btn btn-success btn-lg px-5" type="submit">Add To Cart</button>
                                       <!-- <button  class="btn btn-success btn-lg"  onclick='add_to_cart({{$product->id}},"{{csrf_token()}}")'>Add To Cart</button>-->
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                 
            </div>
                </div>
                
        </div>
    </section>
    <hr>
   <div class="row ms-5">
       <div class="col-4 ms-5 mb-5">
           <h3 class="text-secondary">Comments</h3>
       <div id="collapse{{$product->id}}" dir="ltr" class="mt-3">
                <ul class="list-group ms-1" id="list-comments-{{$product->id}}">
                    @foreach($product->comments as $comment)

                    <li class="list-group-item list-group-item-action" aria-current="true">

                        <div class="d-flex w-100 justify-content-between">
                            <small>{{$comment->user->name}}</small>
                        </div>
                        <p class="mb-1 text-secondary">{{$comment->text}}</p>
                    </li>


                    @endforeach
                </ul>
            </div>
            @guest
            <div class="alert alert-danger mt-4" role="alert">
                برای ثبت نظر حتما باید وارد حساب کاربری خود شوید
            </div>
            @endguest
            @auth
            <div class="mb-3 mt-5">
                <form method="post" id="form-comment-{{$product->id}}">
                    <label for="exampleFormControlTextarea1" class="form-label">Your Comment</label>
                    <input type="text" class="form-control" placeholder="Comment..." name="text">
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>

            <center><button class="btn btn-success btn-lg" type="button" onclick='send_comment({{$product->id}})'> Send Comment</button></center>
            </form>
        </div>
        @endauth
       </div>

   </div>
  
    

@endsection

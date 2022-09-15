@extends('template')
@section('content')



<!-- Start Content -->
<div class="container py-5">
    <div class="row">

        <div class="col-lg-3">
            <h1 class="h2 pb-4">Categories</h1>
            <ul class="list-unstyled templatemo-accordion">
                @foreach($categories as $category)
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none " href="category/{{$category->id}}">
                        {{$category->title}}

                    </a>

                </li>
                @endforeach
            </ul>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline shop-top-menu pb-3 pt-1">
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                        </li>

                    </ul>
                </div>
                <div class="col-md-6">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" id="input_search" onkeyup="search_product()">
                        <button class="btn btn-outline-success" type="button" id="btn_search" onclick="search_product()">Search</button>
                    </form>
                </div>

            </div>
            <div class="row" id="main">
                @foreach($products as $product)
                <div class="col-md-4 ">


                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="{{$product->images->first()->url}}">

                        </div>
                        <div class="card-body">
                            <a href="product/{{$product->id}}" class="h3 text-decoration-none"><h6>{{$product->description}}</h6></a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li>M/L/X/XL</li>

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
                <div class="row">
                    {{$products->links()}}
                </div>
            </div>

        </div>

    </div>
</div>
<script>
    var products;
    
    function search_product() {
        var value;
        var found = false;
        var input_search = document.getElementById("input_search");
        value = input_search.value;
      
        var main = document.getElementById("main");
        main.innerHTML = " ";

        for (var i = 0; i < products.length; i++) {
            console.log("1");
            
            if (products[i].description.toLowerCase().slice(0, value.length) == value || products[i].description.toUpperCase().slice(0, value.length) == value || products[i].description.slice(0, value.length) == value) {
                found = true;
                
            var div_col=document.createElement("DIV");
            div_col.className="col-md-4";

            var div1=document.createElement("DIV");
            div1.className="card mb-4 product-wap rounded-0 ";
            
            var img=document.createElement("IMG");
            img.className="card-img rounded-0 img-fluid";
        
            img.src=products[i].image;

            var div2=document.createElement("DIV");
            div2.className="card rounded-0";

            var div3=document.createElement("DIV");
            div3.className="card-body";

            var tag_a=document.createElement("a");
            tag_a.className="h3 text-decoration-none";
            tag_a.href="product/"+products[i].id;
            
            var tag_h3=document.createElement("H6");
            tag_h3.innerHTML=products[i].description;


            var tag_ul=document.createElement("UL");
            tag_ul.className="w-100 list-unstyled d-flex justify-content-between mb-0";

            var tag_li=document.createElement("LI");
            tag_li.innerHTML="M/L/X/XL";


            var tag_ul2=document.createElement("UL");
            tag_ul2.className="list-unstyled d-flex justify-content-center mb-1";

            var tag_li2=document.createElement("LI");

            var tag_i1=document.createElement("i");
            tag_i1.className="text-warning fa fa-star";
            

            var tag_i2=document.createElement("i");
            tag_i2.className="text-warning fa fa-star";

            var tag_i3=document.createElement("i");
            tag_i3.className="text-warning fa fa-star";

            var tag_i4=document.createElement("i");
            tag_i4.className="text-muted fa fa-star";

            var tag_i5=document.createElement("i");
            tag_i5.className="text-muted fa fa-star";

            var tag_p=document.createElement("P");
            tag_p.className="text-center mb-0";
            tag_p.innerHTML="$"+products[i].price;
            ////////////////////////////
            main.appendChild(div_col); 
            div_col.appendChild(div1);
           
            div1.appendChild(div2); 
            div2.appendChild(img); 


            div1.appendChild(div3); 
            div3.appendChild(tag_a); 
            tag_a.appendChild(tag_h3);
            div3.appendChild(tag_ul); 
            tag_ul.appendChild(tag_li);

            div3.appendChild(tag_ul2); 
            tag_ul2.appendChild(tag_li2);
            
            tag_li2.appendChild(tag_i1);
            tag_li2.appendChild(tag_i2);
            tag_li2.appendChild(tag_i3);
            tag_li2.appendChild(tag_i4);
            tag_li2.appendChild(tag_i5);
            div3.appendChild(tag_p); 


            }
        }
    }
    
    async function read_data(file) {
                    let x = await fetch(file);
                    let y = await x.text();
                    products = JSON.parse(y);
                    console.log(products);

                }
                read_data("https://raw.githubusercontent.com/Fatemeh-Emadi/fashion-shop/main/products2.json");
</script>
<!-- End Content -->
@endsection

<!--End Brands-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fashion Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">


<link rel="shortcut icon" href="E:\shop_center\public\favicon.ico" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="/css/fontawesome.min.css">
    <style>
        a{
            color: white;
        }
    </style>
</head>
<body class="bg-dark">
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Admin Panel</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="عرض/إخفاء لوحة التنقل">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0 " type="text">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Logout</a>
    </div>
  </div>
</header>
<div class="container-fluid ">
  <div class="row">   
  <div class="row">
  @include('sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    @if(session("message"))
<div class="alert mt-3 alert-{{session("message_type")}}" role="alert">
{{session("message")}}
</div>
@endif
<div class="col-6">
<h2 class="text-white mt-5">Edit Product</h2>
<form action="{{url('admin/products/edit')}}" method="post">
    <div class="mb-3">
    <label class="form-label text-white">Image</label>
      <input type="text" class="form-control" name="image" value="/{{$product->images->first()->url}}">
      <label class="form-label text-white">Name</label>
      <input type="text" class="form-control" name="name" value="{{$product->name}}">
      <label class="form-label text-white">Description</label>
      <input type="text" class="form-control" name="description" value="{{$product->description}}">
      <label class="form-label text-white">Price</label>
      <input type="text" class="form-control" name="price" value="{{$product->price}}">
      <label class="form-label text-white">Price Off  </label>
      <input type="text" class="form-control" name="price_off" value="{{$product->price_off}}">
      <label class="form-label text-white">Category </label>
      <input type="text" class="form-control" name="category" value="{{$product->category->id}}">
      <label class="form-label text-white" >Count</label>
      <input type="text" class="form-control" name="count" value="{{$product->count}}">
    </div>
    <input type="hidden" class="form-control" name="id" value="{{$product->id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" class="btn btn-primary">Save</button>
</form>

</main>
    </div>
  </div>
</div>


<!-- Start Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-1.11.0.min.js"></script>
    <script src="/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/templatemo.js"></script>
    <script src="/js/custom.js"></script>
    <!-- End Script -->

</body>
</html>
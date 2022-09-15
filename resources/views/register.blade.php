<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fashion Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="apple-touch-icon" href="../../img/apple-icon.png">
    <link rel="shortcut icon" type="../../image/x-icon" href="img/favicon.ico">

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/templatemo.css">
    <link rel="stylesheet" href="../../css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../../css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
<style>
  .gradient-custom {
    background-image: linear-gradient(to right top, #f2e5f0, #dedaf5, #b6d5f8, #81d2ed, #57cdcc);
  }
  .glass{
    /* From https://css.glass */
background: rgba(255, 255, 255, 0.2);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(5px);
-webkit-backdrop-filter: blur(5px);
border: 1px solid rgba(255, 255, 255, 0.3);
  }
</style>


</head>


<body>
    


   
<section class="gradient-custom ">

<div class="row ms-5 align-items-center justify-content-center " > 
<div class="col-7 mt-5 border  mb-5 glass text-white" style="border-radius: 1rem; border-color:white;">
<center>
<h2 class="fw-bold mb-2 text-uppercase mt-5">Register</h2>
              <p class="text-white mb-5">Please enter your information!</p>
              </center>
<form class="row g-3 mt-3 mb-5 " action="{{url('/register')}}" method="post">
<div class="col-lg-6 col-md-6 col-sm-12 ">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="name">
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 ">
    <label for="inputPassword4" class="form-label">Username</label>
    <input type="text" class="form-control" id="inputPassword4" name="username">
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12  ">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 ">
    <label  class="form-label">Mobile Number</label>
    <input type="text" class="form-control" name="mobile_number">
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 ">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password">
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 ">
    <label for="inputPassword4" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password2">
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 ">
    <label for="inputAddress" class="form-label">Address</label>
    <textarea class="form-control" id="inputAddress" placeholder="1234 Main St" name="address"></textarea>
  </div>
  

  <div class="col-lg-4 col-md-14 col-sm-12 ">
    <label for="inputState" class="form-label">City</label>
    <select id="inputState" class="form-select" name="city">
    @foreach($cities as $city)
      <option value="{{$city->id}}">{{$city->name}}</option>

    @endforeach
    </select>
  </div>
  
  <div class="col-lg-12 col-md-12 col-sm-12 ">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 ">
  <input type="hidden" name="_token" value="{{csrf_token()}}" >
  <center>
    <button type="submit" class="btn btn-outline-light btn-lg ">Sign Up</button>
    </center>
  </div>
</form>
</div>
</div>
</section>
</body>
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
  <div class="row">

<section class=" gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
        <div class="card  text-white glass" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Admin Login</h2>
              <p class="text-white mb-5">Please enter your username and password!</p>
              <form method="post" action="{{url('/login-admin')}}" >
              <div class="form-outline form-white mb-4 text-start">
              <label class="form-label" for="typeEmailX" >Username</label>
                <input type="text" id="typeEmailX" class="form-control form-control-lg" name="username" />
               
              </div>

              <div class="form-outline form-white mb-4 text-start">
              <label class="form-label " for="typePasswordX">Password</label>
                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password"/>
              
              </div>

              <input type="hidden" name="_token" value="{{csrf_token()}}" >

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>


            </div>
                  </form>
            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>   
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
<script src="../../js/jquery-1.11.0.min.js"></script>
    <script src="../../js/jquery-migrate-1.2.1.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/templatemo.js"></script>
    <script src="../../js/custom.js"></script>
    <!-- End Script -->
<!-- Pills content -->
</body>
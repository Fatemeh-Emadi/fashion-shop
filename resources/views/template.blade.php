<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fashion Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">


<link rel="shortcut icon" href="E:\shop_center\public\favicon.ico" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../../css/fontawesome.min.css">

</head>

<body>
    
@include('../header')   
@if(session("message"))
<div class="row">
    <div class="col-6 mt-2 ms-3">
<div class="alert alert-{{session("message_type")}}" role="alert">
{{session("message")}}
</div>
</div>
</div>
@endif

@yield('content')

@include('../footer') 

<!-- Start Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../js/jquery-1.11.0.min.js"></script>
    <script src="../../js/jquery-migrate-1.2.1.min.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/templatemo.js"></script>
    <script src="../../js/custom.js"></script>
    <!-- End Script -->

</body>
</html>

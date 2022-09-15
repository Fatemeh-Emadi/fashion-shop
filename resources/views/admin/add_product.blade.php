@extends('admintemplate')
@section('content')

<div class="col-6 mt-5 ">
<form action="{{url('admin/products/add')}}" method="post">
    <div class="mb-2  mt-5 ">
      <label class="form-label text-light">Name</label>
      <input type="text" class="form-control" name="name">
      <label class="form-label text-light"> Description</label>
      <input type="text" class="form-control" name="description">
      <label class="form-label text-light"> Price</label>
      <input type="text" class="form-control" name="price">
      <label class="form-label text-light">Price Off  </label>
      <input type="text" class="form-control" name="price_off">
      <label class="form-label text-light"> Count </label>
      <input type="text" class="form-control" name="count">
    
 <div id="holder" style="margin-top:15px;max-height:100px;"></div>
      <label class="form-label text-light">Category</label>
      <select name="category_id">
          @foreach($categories as $category)
          <option value="{{$category->id}}" >{{$category->title}}</option>
          @endforeach
      </select>

    

      </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" class="btn btn-primary  mb-2 ">Add Product</button>
    
   
</form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script> $('#lfm').filemanager('image');</script>
@endsection
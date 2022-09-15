@extends('admintemplate')
@section('content')

<h2 class="text-light mt-5 ">Add New City</h2>
<form action="{{url('admin/cities/add')}}" method="post">
    <div class="mb-3 col-5">
      <label class="form-label text-light">City Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" class="btn btn-primary">Add</button>
</form>

@endsection
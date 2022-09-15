@extends('admintemplate')
@section('content')


<table class="table table-striped  mt-5" style="background-color: white;font-size:13px;">
<tr>
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
    <th>
        Username
    </th>
    <th>Password</th>
    <th>City</th>
    <th>Address</th>
    <th>Mobile </th>
    <th></th>
</tr>
@foreach($users as $user)
<tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->username}}</td>
    <td>{{$user->password}}</td>
    <td>{{$user->city->name}}</td>
    <td>{{$user->address}}</td>
    <td>{{$user->mobile_number}}</td>
    <td>
       
        <a class="btn btn-danger" href="users/delete/{{$user->id}}"><i class="bi bi-trash"></i></a>
    </td>
</tr>
@endforeach
</table>



@endsection
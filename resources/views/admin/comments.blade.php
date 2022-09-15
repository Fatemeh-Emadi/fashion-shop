@extends('admintemplate')
@section('content')


<table class="table table-striped mt-5" style="background-color:white;">
<tr>
    <th>#</th>
     
     <th>Product Name</th>
     <th>User Name</th>
    <th>Comment</th>
    <th></th>
</tr>
@foreach($comments as $comment)
<tr>
    <td>{{$comment->id}}</td>
    
    <td>{{$comment->product->name}}</td>
    <td>{{$comment->user->name}}</td>
    <td>{{$comment->text}}</td>
    <td>
       
    
        <a class="btn btn-danger" href="comments/delete/{{$comment->id}}"><i class="bi bi-trash"></i></a>
    </td>
</tr>
@endforeach
</table>



@endsection
@extends('admintemplate')
@section('content')


<a class="btn btn-success mt-5 " href="{{url('/admin/products/add')}}">Add New Product</a>


        <table class="table table-striped text-secondary" style="background-color: white;" >
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Price-Off  </th>
                    <th scope="col">Category </th>
                    <th scope="col">Count</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>

                    <th scope="row" class="text-secondary">{{$product->id}}</th>
                    <td> <img src="/{{$product->images->first()->url}}" class="card-img-top" alt="..." width="60px" height="60px"></td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->price_off}}</td>
                    <td>{{$product->category->title}}</td>
                    <td>{{$product->count}}</td>
                    <td> <a href="products/edit/{{$product->id}}" class="btn btn-sm btn-info mt-3"><i class="bi bi-pencil-square"></i></a>
                        <a href="products/delete/{{$product->id}}" class="btn btn-sm btn-danger mt-3"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>






        


@endsection
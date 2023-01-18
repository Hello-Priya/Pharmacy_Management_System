@extends('backend.master')
@section('content')

<div class="container">
    <h1 class="text-center bg-primary text-white mb-5">Product List Table</h1>
    <div class="d-flex justify-content-center">
    <a href="{{route('product')}}" class="btn btn-info">Form</a>

    </div>
    <br></br>
<table class="table table-striped table-hover table-bordered border-dark table-primary">

  <thead>
    <tr>
      <th class="bg-primary" scope="col">SL_NO</th>
      <th class="bg-primary" scope="col">Name</th>
      <th class="bg-primary" scope="col">Company_Name</th>
      <th class="bg-primary" scope="col">Product_image</th>
      <th class="bg-primary" scope="col">Type</th>
      <th class="bg-primary" scope="col">Price</th>
      <th class="bg-primary" scope="col">Product_Details</th>
      <th class="bg-primary" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ProductStore as $product)
    <tr>
    <td class="bg-primary" scope="row">{{$product->id}}</td>
    <td class="bg-primary" scope="row">{{$product->Name}}</td>
    <td class="bg-primary" scope="row">{{$product->$companies->Company_Name}}</td>
    <td><img width="70px" src="{{ url('/uploads/product/',$product->Product_image) }}" alt="" srcset=""></td>
    <td class="bg-primary" scope="row">{{$product->Type}}</td>
    <td class="bg-primary" scope="row">{{$product->Price}}</td>
    <td class="bg-primary" scope="row">{{$product->Product_Details}}</td>
    
    <td>
    <a href="{{route('Product-edit',$product->id)}}" class="btn btn-info">Edit</a>
    <a href="{{route('product_delete',$product->id)}}" class="btn btn-danger">Delete</a>
    </td>
   
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div class="d-flex justify-content-center">
  {{$ProductStore->links()}}
</div>
@endsection
  

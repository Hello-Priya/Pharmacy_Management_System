@extends('backend.master')
@section('content')

<h1 class="text-center">Medicine_Product</h1>
<h1><a href="{{route('View')}}"></a></h1>
<div class="container">

<form class="form" action="{{route('med-product')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
    <label for="text">SL_NO:</label>
    <input type="number" class="form-control" id="number" Name="SL_NO">
    <div>
    @error('SL_NO')
    <div class="alert alert-danger">{{$message}}</div>
@enderror
    </div>
</div>

<div class="form-group">
    <label for="">Product_image:</label>
    <input type="file" class="form-control" placeholder="click image" id="name" Name="Product_image">
  <div>
    @error('Product_image')
    <div class="alert alert-danger">{{$message}}</div>
@enderror
 </div>
  </div>

  <div class="form-group">
    <label for="text">Product_Name:</label>
    <input type="text" class="form-control" placeholder="Enter your Name" id="name" Name="Name">
  <div>
    @error('Product_Name')
    <div class="alert alert-danger">{{$message}}</div>
@enderror
 </div>
  </div>

  <div class="form-group">
    <label for="pwd">Type:</label>
    <input type="text" class="form-control" placeholder="Enter Type" id="name"
     Name="Type">
  <div>
    @error('Type')
    <div class="alert alert-danger">{{$message}}</div>
@enderror
  </div>
  </div>

  <div class="form-group">
    <label for="pwd">Price:</label>
    <input type="text" class="form-control" placeholder="Enter Type" id="Price"
     Name="Price">
@error('Price')
<div class="alert alert-danger">{{$message}}</div>
@enderror
</div>

  <div class="form-group">
    <label for="text">Product_Details:</label>
    <input type="text" class="form-control" id="stock" Name="Product_Details">
<div>
    @error('Product_Details')
    <div class="alert alert-danger">{{$message}}</div>
@enderror
</div>
</div>

@if (session('success'))
<div class=alert alert-success>{session{"success"}}
</div>
@endif
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
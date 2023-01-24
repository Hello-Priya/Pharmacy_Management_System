@extends('backend.master')
@section('content')

<h1 class="text-center">payment update List</h1>

<div class="container">
<a href="{{route('stoke')}}"></a>
<div class="form-group">

<form class="form" action="{{route('stoke_update',$StokeEdit->id)}}" method="POST">
@method('PUT')
    @csrf


    <div class="form-group">
    <label for="text">id:</label>
    <input type="number" class="form-control" id="number" Name="SL_id">
  
</div>

<div class="form-group">
    <label for="">Product Name:</label>
    <input type="text" class="form-control" placeholder="Enter product_Name" id="name" Name="Product_Name">
  
  </div>

  <div class="form-group">
    <label for="text">Product_details:</label>
    <input type="pwd" class="form-control" placeholder="Enter " id="name" Name="Product_details">
 
  </div>

 

 

 <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
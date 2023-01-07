@extends('backend.master')
@section('content')


<h1 class="text-center">Product_List</h1>
<div class="container">
<a href="{{route('product')}}" class="btn btn-info">Form</a>
<br></br>
<form class="form" action="{{route('update_edit',$ProductEdit->id)}}" method="POST">
  @method('PUT')
    @csrf

    <div class="form-group">
    <label for="text">SL_NO:</label>
    <input type="number" class="form-control" id="number" Name="SL_NO">
  
</div>

<div class="form-group">
    <label for="">Product_image:</label>
    <input type="file" class="form-control" placeholder="click image" id="name" Name="Product_image">
 
  </div>

  <div class="form-group">
    <label for="text">Product_Name:</label>
    <input type="text" class="form-control" placeholder="Enter your Name" id="name" Name="Name">
  
  </div>

  <div class="form-group">
    <label for="pwd">Type:</label>
    <input type="text" class="form-control" placeholder="Enter Type" id="name"
     Name="Type">
  

  </div>

  <div class="form-group">
    <label for="pwd">Price:</label>
    <input type="text" class="form-control" placeholder="Enter Type" id="Price"
     Name="Price">

</div>

  <div class="form-group">
    <label for="text">Product_Details:</label>
    <input type="text" class="form-control" id="stock" Name="Product_Details">

</div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
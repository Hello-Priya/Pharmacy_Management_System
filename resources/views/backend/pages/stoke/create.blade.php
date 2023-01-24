@extends('backend.master')
@section('content')

<h1 class="text-center">Create Stoke List</h1>

<div class="container">
<a href="{{route('stoke_create')}}"></a>
<div class="form-group">

<form class="form" action="{{route('Database_form')}}" method="POST">
    @csrf


    <div class="form-group">
    <label for="text">id:</label>
    <input type="number" class="form-control" id="number" Name="SL_id">
  
</div>

<div class="form-group">
    <label for="">Product Name:</label>
    <input type="text" class="form-control" placeholder="Enter Customer_Name" id="name" Name="Product_Name">
  
  </div>

  <div class="form-group">
    <label for="text">Product details:</label>
    <input type="pwd" class="form-control" placeholder="Enter Customer_List" id="name" Name="Product_details">
 
  </div>

 
 

 <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
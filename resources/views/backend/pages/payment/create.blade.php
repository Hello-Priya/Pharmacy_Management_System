@extends('backend.master')
@section('content')

<h1 class="text-center">Create Customer List</h1>

<div class="container">
<a href="{{route('view_form')}}"></a>
<div class="form-group">

<form class="form" action="{{route('create_form-submit')}}" method="POST">
    @csrf


    <div class="form-group">
    <label for="text">id:</label>
    <input type="number" class="form-control" id="number" Name="id">
  
</div>

<div class="form-group">
    <label for="">Product Name:</label>
    <input type="text" class="form-control" placeholder="Enter Customer_Name" id="name" Name="Product_Name">
  
  </div>

  <div class="form-group">
    <label for="text">Date:</label>
    <input type="pwd" class="form-control" placeholder="Enter Customer_List" id="name" Name="Date">
 
  </div>

  <div class="form-group">
    <label for="pwd">Amount:</label>
    <input type="number" class="form-control" placeholder="Enter customer number" id="name" Name="Amount">
 
  </div>

 

 <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
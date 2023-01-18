@extends('backend.master')
@section('content')

<h1 class="text-center">Create Customer List</h1>

<div class="container">
<a href="{{route('viewform')}}"></a>
<div class="form-group">

<form class="form" action="{{route('customer_submit')}}" method="POST">
    @csrf


    <div class="form-group">
    <label for="text">id:</label>
    <input type="number" class="form-control" id="number" Name="id">
  
</div>

<div class="form-group">
    <label for="">Customer Name:</label>
    <input type="text" class="form-control" placeholder="Enter Customer_Name" id="name" Name="Customer_Name">
  
  </div>

  <div class="form-group">
    <label for="text">Customer_Address:</label>
    <input type="text" class="form-control" placeholder="Enter Customer_List" id="name" Name="Customer_Address">
 
  </div>

  <div class="form-group">
    <label for="pwd">Customer Number:</label>
    <input type="number" class="form-control" placeholder="Enter customer number" id="name" Name="Customer_Number">
 
  </div>

 

 <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
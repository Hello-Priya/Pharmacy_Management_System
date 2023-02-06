@extends('backend.master')
@section('content')

<h1 class="text-center">Create Purchase Form</h1>
<h1><a href="{{route('Purchase_view')}}"></a></h1>
<div class="container">
<div class="form-group">

<form class="form" action="{{route('Purchase_data')}}" method="POST">
    @csrf
    <label for="pwd">ID:</label>
    <input type="pwd" class="form-control" placeholder="Enter your id" id="name" Name="ID">
  
  <div class="form-group">
  <label for="text">Name:</label>
    <input type="text" class="form-control" placeholder="Enter your name" id="name" Name="Name">
</div>

<div class="form-group">
  <label for="text">Address:</label>
    <input type="text" class="form-control" placeholder="Enter your address" id="name" Name="Address">
</div>

<div class="form-group">
  <label for="text">Amount:</label>
    <input type="number" class="form-control" placeholder="Enter your amount" id="name" Name="Amount">
</div>


  <div class="form-group">
    <label for="text">Quantity:</label>
    <input type="number" class="form-control" placeholder="Enter your quantity" id="name" Name="Quantity" >
 
  </div>
  

</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
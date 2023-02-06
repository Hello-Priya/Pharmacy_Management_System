@extends('backend.master')
@section('content')

<h1 class="text-center">Create Sale Form</h1>
<h1><a href="{{route('Sale_Create')}}"></a></h1>
<div class="container">
<div class="form-group">

<form class="form" action="{{route('database_sale_form')}}" method="POST">
    @csrf 
  

  </div>


  <div>
  <label for="text">order:</label>
    <input type="text" class="form-control" placeholder="Enter your order" id="name" Name="Order">


  </div>

  <div>
  <label for="text">order place:</label>
    <input type="pwd" class="form-control" placeholder="Enter your order place" id="name" Name="Order_Place">
 

  </div>

  <div>
  <label for="text">payment:</label>
    <input type="pwd" class="form-control" placeholder="Enter your order payment" id="name" Name="Payment">
 

  </div>

  <div>
  <label for="text">discount:</label>
    <input type="pwd" class="form-control" placeholder="Enter your discount" id="name" Name="Discount">
 

  </div>

  

  

</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
@extends('backend.master')
@section('content')

<h1 class="text-center">Purchase Form Manufactures</h1>
<h1><a href="{{route('Purchase_view')}}"></a></h1>
<div class="container">


<form class="form" action="{{route('Purchase_data')}}" method="POST" enctype="multipart/form-data">
    @csrf 

    <div class="form-group">
    <label for="num">ID:</label>
    <input type="number" class="form-control" id="number" Name="ID">
    <div>
    @error('id')
    <div class="alert alert-danger">{{$message}}</div>
@enderror
    </div>
</div>

<div class="form-group">
    <label for="">Name:</label>
    <input type="text" class="form-control" placeholder="Enter your name" id="name" Name="Name">
  <div>
    @error('Name')
    <div class="alert alert-danger">{{$message}}</div>
@enderror
 </div>
  </div>

  <div class="form-group">
    <label for="text">Address:</label>
    <input type="text" class="form-control" placeholder="Enter your address" id="Address" Name="Address">
  <div>
    @error('Address')
    <div class="alert alert-danger">{{$message}}</div>
@enderror
 </div>
  </div>

  <div class="form-group">
    <label for="pwd">Amount:</label>
    <input type="number" class="form-control" placeholder="Enter Type" id="amount"
     Name="Amount">
  <div>
    @error('Amount')
    <div class="alert alert-danger">{{$message}}</div>
@enderror
  </div>
  </div>

  

  <div class="form-group">
    <label for="text">Quantity:</label>
    <input type="text" class="form-control" id="stock" Name="Quantity">
<div>
    @error('Quantity')
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


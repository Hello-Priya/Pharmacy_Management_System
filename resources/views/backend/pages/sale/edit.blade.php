@extends('backend.master')
@section('content')

<div class="container">
    <h1 class="text-center bg-black text-white mb-5">Sale List Table</h1>
    <div class="d-flex justify-content-center">
    <a href="{{route('sale_form')}}" class="btn btn-info">Form</a>

    </div>
    <br></br>
<table class="table table-striped table-hover table-bordered border-dark table-primary">

  <thead>
    <tr>
      
     
      <th class="bg-primary" scope="col">Order</th>
      <th class="bg-primary" scope="col">Order_Place</th>
      <th class="bg-primary" scope="col">Payment</th>
      <th class="bg-primary" scope="col">Discount</th>
   
      <th class="bg-primary" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Sales as $sales)
    <tr>
  
   
    <td class="bg-primary" scope="row">{{$sales->Order}}</td>
    <td class="bg-primary" scope="row">{{$sales->Order_Place}}</td>
    <td class="bg-primary" scope="row">{{$sales->Payment}}</td>
    <td class="bg-primary" scope="row">{{$sales->Discount}}</td>
    
  
    
    
    <td>
    <a href="{{route('Sale_view',$sales->id)}}" class="btn btn-info">Edit</a>
    <a href="{{route('Sale_delete',$sales->id)}}" class="btn btn-danger">Delete</a>
    </td>
   
   
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection
  

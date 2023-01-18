@extends('backend.master')
@section('content')

<div class="container">
    <h1 class="text-center bg-primary text-white mb-5">Customer List Table</h1>
    <a href="{{route('category')}}" class="btn btn-info">Form</a>
    <br></br>
<table class="table table-striped table-hover table-bordered border-dark table-primary">

  <thead>
    <tr>
      <th class="bg-primary" scope="col">SL_NO</th>
      <th class="bg-primary" scope="col">Name</th>
      <th class="bg-primary" scope="col">Type</th>
      <th class="bg-primary" scope="col">Amount</th>
      <th class="bg-primary" scope="col">In_Stock</th>
      <th class="bg-primary" scope="col">Stock_Out</th>
      <th class="bg-primary" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Customers as $customer)
    <tr>
    <td class="bg-primary" scope="row">{{$customer->id}}</td>
    <td class="bg-primary" scope="row">{{$customer->Name}}</td>
    <td class="bg-primary" scope="row">{{$customer->Type}}</td>
    <td class="bg-primary" scope="row">{{$customer->Amount}}</td>
    <td class="bg-primary" scope="row">{{$customer->In_Stock}}</td>
    <td class="bg-primary" scope="row">{{$customer->Stock_Out}}</td>
    <td>
    <a href="{{route('edit',$customer->id)}}" class="btn btn-info">Edit</a>
    <a href="{{route('delete-form',$customer->id)}}" class="btn btn-danger">Delete</a>

    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div class="d-flex justify-content-center">
  {{$Customers->links()}}
</div>

@endsection
  

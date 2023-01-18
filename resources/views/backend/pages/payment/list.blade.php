@extends('backend.master')
@section('content')

<div class="container">
    <h1 class="text-center bg-primary text-white mb-5">Customer List</h1>
    <a href="{{route('create_form')}}" class="btn btn-info">Form</a>
    <br></br>
<table class="table table-striped table-hover table-bordered border-dark table-primary">

  <thead>
    <tr>
      <th class="bg-primary" scope="col">id</th>
      <th class="bg-primary" scope="col">Product_Name</th>
      <th class="bg-primary" scope="col">Date</th>
      <th class="bg-primary" scope="col">Amount</th>
      
      <th class="bg-primary" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Payments as $payment)
    <tr>
    <td class="bg-primary" scope="row">{{$payment->id}}</td>
    <td class="bg-primary" scope="row">{{$payment->Product_Name}}</td>
    <td class="bg-primary" scope="row">{{$payment->Date}}</td>
    <td class="bg-primary" scope="row">{{$payment->Amount}}</td>
   
    <td>
   
    <a href="{{route('edit_form',$payment->id)}}" class="btn btn-info">Edit</a>
    <a href="{{route('delete_form',$payment->id)}}" class="btn btn-danger">Delete</a>

    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>


@endsection
  

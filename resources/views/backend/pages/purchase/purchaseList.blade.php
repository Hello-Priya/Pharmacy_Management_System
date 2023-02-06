@extends('backend.master')
@section('content')

<div class="container">
    <h1 class="text-center bg-primary text-white mb-5">Purchase List Table</h1>
    <div class="d-flex justify-content-center">
    <a href="{{route('Manufactures_form')}}" class="btn btn-info">Form</a>

    </div>
    <br></br>
<table class="table table-striped table-hover table-bordered border-dark table-primary">

  <thead>
    <tr>
      <th class="bg-primary" scope="col">ID</th>
      <th class="bg-primary" scope="col">Name</th>
      <th class="bg-primary" scope="col">Address</th>
      <th class="bg-primary" scope="col">Amount</th>
      <th class="bg-primary" scope="col">Quantity</th>
      <th class="bg-primary" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Purchases as $purchase)
    <tr>
    <td class="bg-primary" scope="row">{{$purchase->id}}</td>
    <td class="bg-primary" scope="row">{{$purchase->Name}}</td>
    <td class="bg-primary" scope="row">{{$purchase->Address}}</td>
 
    <td class="bg-primary" scope="row">{{$purchase->Amount}}</td>
    <td class="bg-primary" scope="row">{{$purchase->Quantity}}</td>
    
    
    <td>
    <a href="{{route('Purchase_EditForm',$purchase->id)}}" class="btn btn-info">Edit</a>
    <a href="{{route('Purchase_deleteForm',$purchase->id)}}" class="btn btn-danger">Delete</a>
    </td>
   
   
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection
  

@extends('backend.master')
@section('content')

<div class="container">
    <h1 class="text-center bg-primary text-white mb-5">Customer List</h1>
    <a href="{{route('customer')}}" class="btn btn-info">Form</a>
    <br></br>
<table class="table table-striped table-hover table-bordered border-dark table-primary">

  <thead>
    <tr>
      <th class="bg-primary" scope="col">id</th>
      <th class="bg-primary" scope="col">Customer_Name</th>
      <th class="bg-primary" scope="col">Customer_List</th>
      <th class="bg-primary" scope="col">Customer_Number</th>
      <th class="bg-primary" scope="col">Customer_Email</th>
      <th class="bg-primary" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Customers as $Customer)
    <tr>
    <td class="bg-primary" scope="row">{{$Customer->id}}</td>
    <td class="bg-primary" scope="row">{{$Customer->Customer_Name}}</td>
    <td class="bg-primary" scope="row">{{$Customer->Customer_List}}</td>
    <td class="bg-primary" scope="row">{{$Customer->Customer_Number}}</td>
    <td class="bg-primary" scope="row">{{$Customer->Customer_Email}}</td>
    <td>
   
    <a href="{{route('update',$Customer->id)}}" class="btn btn-info">Edit</a>
    <a href="{{route('form_delete',$Customer->id)}}" class="btn btn-danger">Delete</a>

    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>


@endsection
  

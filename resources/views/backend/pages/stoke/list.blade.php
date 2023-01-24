@extends('backend.master')
@section('content')

<div class="container">
    <h1 class="text-center bg-primary text-white mb-5">Customer List</h1>
    <a href="{{route('stoke')}}" class="btn btn-info">Form</a>
    <br></br>
<table class="table table-striped table-hover table-bordered border-dark table-primary">

  <thead>
    <tr>
      <th class="bg-primary" scope="col">SL_id</th>
      <th class="bg-primary" scope="col">Product_Name</th>
      <th class="bg-primary" scope="col">Product_details</th>
      <th class="bg-primary" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Stokes as $stokes)
    <tr>
    <td class="bg-primary" scope="row">{{$stokes->SL_id}}</td>
    <td class="bg-primary" scope="row">{{$stokes->Product_Name}}</td>
    <td class="bg-primary" scope="row">{{$stokes->Product_details}}</td>
  
   
    <td>
   
    <a href="{{route('stoke_edit',$stokes->id)}}" class="btn btn-info">Edit</a>
    <a href="{{route('stoke_delete',$stokes->id)}}" class="btn btn-danger">Delete</a>

    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>


@endsection
  

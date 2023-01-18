@extends('backend.master')
@section('content')

<div class="container">
    <h1 class="text-center bg-primary text-white mb-5">Company Table</h1>
    <a href="{{route('company')}}" class="btn btn-info">Form</a>
    <br></br>
<table class="table table-striped table-hover table-bordered border-dark table-primary">

  <thead>
    <tr>
      
      <th class="bg-primary" scope="col">Company_Name</th>
      <th class="bg-primary" scope="col">Details</th>
      <th class="bg-primary" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Companies as $company)
    <tr>
   
    <td class="bg-primary" scope="row">{{$company->Company_Name}}</td>
    <td class="bg-primary" scope="row">{{$company->Details}}</td>
   
    <td>
   
    <a href="{{route('update-form',$company->id)}}" class="btn btn-info">Edit</a>
    <a href="{{route('delete-submit',$company->id)}}" class="btn btn-danger">Delete</a>

    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>


@endsection
  

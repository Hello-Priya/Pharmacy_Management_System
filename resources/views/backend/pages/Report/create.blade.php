@extends('backend.master')
@section('content')

<h1 class="text-center">Create Report Form</h1>
<h1><a href="{{route('report_create')}}"></a></h1>
<div class="container">
<div class="form-group">

<form class="form" action="{{route('database_report_form')}}" method="POST">
    @csrf 
  

  </div>
<div>
  <label for="text">In_Stoke:</label>
    <input type="text" class="form-control" placeholder="Enter your In_Stoke" id="name" Name="In_Stoke">
 

  </div>

  <div>
  <label for="text">Stoke_Out:</label>
    <input type="text" class="form-control" placeholder="Enter your Stoke_Out" id="name" Name="Stoke_Out">


  </div>

  <div>
  <label for="text">Expired:</label>
    <input type="pwd" class="form-control" placeholder="Enter your Expired" id="name" Name="Expired">
 

  </div>

  

  

</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
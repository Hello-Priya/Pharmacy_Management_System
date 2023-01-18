@extends('backend.master')
@section('content')

<h1 class="text-center">Company List</h1>
<h1><a href="{{route('company')}}"></a></h1>
<div class="container">
<div class="form-group">
<form class="form" action="{{route('update-form-submit',$CompanyEdit->id)}}" method="POST">
  @method('PUT')
    @csrf
    
    <label for="text">Company_Name:</label>
    <input type="text" class="form-control" placeholder="Enter your name" id="name" Name="Company_Name">
  <div>
    @error('Company_Name')
    <div class="alert alert-danger">{{$message}}</div>
@enderror
 </div>
  </div>

  
</div>
  <div class="form-group">
    <label for="text">details:</label>
    <input type="text" class="form-control" placeholder="Enter your Name" id="name" Name="Details" >
    @error('Details')
    <div class="alert alert-danger">{{$message}}</div>
@enderror
 </div>
  </div>
  
  @if (session('success'))
<div class=alert alert-success>{session{"success"}}
</div>
@endif
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
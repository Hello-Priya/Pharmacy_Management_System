@extends('backend.master')
@section('content')

<div class="container">
    <h1 class="text-center bg-black text-white mb-5">Report List Table</h1>
    <div class="d-flex justify-content-center">
    <a href="{{route('report_form')}}" class="btn btn-info">Form</a>

    </div>
    <br></br>
<table class="table table-striped table-hover table-bordered border-dark table-primary">

  <thead>
    <tr>
      
      <th class="bg-primary" scope="col">In_Stoke</th>
      <th class="bg-primary" scope="col">Stoke_Out</th>
      <th class="bg-primary" scope="col">Expired</th>
   
      <th class="bg-primary" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Reports as $report)
    <tr>
  
    <td class="bg-primary" scope="row">{{$report->In_Stoke}}</td>
    <td class="bg-primary" scope="row">{{$report->Stoke_Out}}</td>
    <td class="bg-primary" scope="row">{{$report->Expired}}</td>
  
    
    
    <td>
    <a href="{{route('report_edit',$report->id)}}" class="btn btn-info">Edit</a>
    <a href="{{route('report_delete',$report->id)}}" class="btn btn-danger">Delete</a>
    </td>
   
   
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection
  

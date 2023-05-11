
@extends('Admin.layouts.admin.app')

@section('title' , 'Trainee Form')
    

@section('content')
    
{{-- {{dd($data)}} --}}
{{-- Show User --}}
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Trainee Table</h4>
      {{-- <p class="card-description"> Add class <code>.table-striped</code> --}}
      </p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th> Name </th>
            <th> Email </th>
            <th> Phone Number </th>
            <th> Intrest </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $value)
              
          <tr>
           
            <td> {{$value->name}} </td>
            <td> {{$value->email}} </td>
          
            <td>  {{$value->phone}} </td>
            <td> {{$value->intrest}} </td>

          </tr>
          @endforeach
         
        </tbody>
      </table>
    </div>
  </div>
</div>
{{-- Show User --}}




  @endsection

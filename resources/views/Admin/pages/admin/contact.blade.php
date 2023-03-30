
@extends('Admin.layouts.admin.app')

@section('title' , 'Contact Form')
    

@section('content')
    
{{-- {{dd($data)}} --}}
{{-- Show User --}}
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Contact Form Table</h4>
      <p class="card-description"> Add class <code>.table-striped</code>
      </p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th> First Name </th>
            <th> Last Name </th>
            <th> Email </th>
            <th> Phone Number </th>
            <th> Message </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $value)
              
          <tr>
           
            <td> {{$value->first_name}} </td>
            <td> {{$value->last_name}} </td>
          
            <td>  {{$value->email}} </td>
            <td> {{$value->phoneNumber}} </td>
            <td> {{$value->message}} </td>

          </tr>
          @endforeach
         
        </tbody>
      </table>
    </div>
  </div>
</div>
{{-- Show User --}}




  @endsection

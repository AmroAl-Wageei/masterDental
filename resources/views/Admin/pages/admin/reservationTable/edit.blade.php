
@extends('Admin.layouts.admin.app')

@section('title' , 'Reservation')
    

@section('content')
    
{{-- {{dd($data)}} --}}
{{-- Show User --}}
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
        <div style="display: flex;justify-content:space-between">

            <h4 class="card-title">Edit Reservation </h4>
        </div>

      {{-- <p class="card-description"> Add class <code>.table-striped</code> --}}
      </p>

      


      


      
      <form method="POST" action="{{Route('admin.reservation.update',$data->id)}}" >
        @method('PUT')
        @csrf

        <select name="status" style="background: rgb(120, 167, 170); border:none; color : white; padding : 10px">
            <option value="Pending">Pending</option>
            <option value="Accepted">Accepted</option>
            <option value="Rejected">Rejected</option>
        </select>

        <button type="submit" style="background: rgb(157, 95, 200); border:none; color : rgb(255, 255, 255); padding : 10px">Edit</button>
      </form>





{{-- Show User --}}




  @endsection

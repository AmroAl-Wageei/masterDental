
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

      <p class="card-description"> Add class <code>.table-striped</code>
      </p>

      <form method="POST" action="{{Route('admin.reservation.update',$data->id)}}" >
        @method('PUT')
        @csrf

        <select name="status">
            <option value="Pending">Pending</option>
            <option value="Accepted">Accepted</option>
            <option value="Rejected">Rejected</option>
        </select>

        <a href="{{Route('admin.reservation.index')}}"><label class="badge badge-primary" style="cursor: pointer">Edit</label></a>
      </form>





{{-- Show User --}}




  @endsection

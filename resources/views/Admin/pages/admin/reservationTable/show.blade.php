
@extends('Admin.layouts.admin.app')

@section('title' , 'Reservation')
    

@section('content')
    
{{-- {{dd($data)}} --}}
{{-- Show User --}}
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
        <div style="display: flex;justify-content:space-between">

            <h4 class="card-title">All Reservation Table</h4>
        </div>
{{-- 
      <p class="card-description"> Add class <code>.table-striped</code>
      </p> --}}


{{-- {{dd($reservations)}} --}}



      {{-- Tabel Reservation --}}

                  <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                      {{-- <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Basic Table</h4>
                          <p class="card-description"> Add class <code>.table</code>
                          </p> --}}
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Service</th>
                                <th>Comment</th>
                                <th>Res_Date</th>
                                <th>Status</th>
                                <th>Edit status</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($reservations as $value)
                                  
                              <tr>
                                <td>{{$value['first_name']}} {{$value->last_name}}</td>
                                <td>{{$value->phoneNumber}} </td>
                                <td>{{$value->email}} </td>
                                <td>{{$value->service->name}} </td>
                                <td>{{$value->comment}} </td>
                                <td>{{$value->res_date}} </td>

                                @if ($value->status=="Pending")
                                    

                                <td ><label class="badge badge-warning">Pending</label></td>
                                
                                
                                @elseif($value->status=="Accepted")
                                
                                <td><label class="badge badge-success">Accepted</label></td>
                                @else
                                
                                <td><label class="badge badge-danger">Rejected</label></td>
                                @endif
                                <td>
                                  <a href="{{Route('admin.reservation.edit',$value->id)}}"><label class="badge badge-primary" style="cursor: pointer">Edit</label></a>
                                </td>
                              </tr>
                              {{-- warning , info , success --}}
                              @endforeach

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
      {{-- Tabel Reservation --}}
{{-- Show User --}}




  @endsection

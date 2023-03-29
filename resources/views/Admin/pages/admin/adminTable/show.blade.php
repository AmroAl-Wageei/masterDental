
@extends('Admin.layouts.admin.app')

@section('title' , 'Dashboard')
    

@section('content')
    
{{-- {{dd($data)}} --}}
{{-- Show User --}}
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
        <div style="display: flex;justify-content:space-between">

            <h4 class="card-title">Striped Table</h4>
            <div>
                <a href="{{Route('admin.admins.create')}}"><button type="submit" class="btn btn-block bg-gradient-success btn-sm">Add admin</button></a>

            </div>
        </div>

      <p class="card-description"> Add class <code>.table-striped</code>
      </p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th> ID </th>
            <th> Image </th>
            <th>  Name </th>
            <th> Email </th>
            <th> Phone Number </th>
          </tr>
        </thead>
        <tbody>
          <?php $i  = 1 ?>
          @foreach ($data as $value)
              
          <tr>
            <td> {{$i}} </td>
            <td class="py-1">
              <img src="{{URL::asset("storage/image/$value->image")}}" alt="image" />
            </td>
            <td> {{$value->name}} </td>
          
            <td>  {{$value->email}} </td>
            <td> {{$value->phone}} </td>

          
          </tr>
          <?php ++$i ?>
          @endforeach
         
        </tbody>
      </table>
    </div>
  </div>
</div>
{{-- Show User --}}




  @endsection

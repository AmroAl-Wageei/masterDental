
@extends('Admin.layouts.admin.app')

@section('title' , 'Create Admin')
    

@section('content')
    


{{-- Add  --}}
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Create New Admin </h4>
      {{-- <p class="card-description"> Basic form layout </p> --}}
      <form class="forms-sample"  action="{{route('admin.admins.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputUsername1">Username</label>
          <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username"  name="name" placeholder="Enter name" value="{{ old('name')}}" class="@error('name') is-invalid @enderror">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
         @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" placeholder="Enter Long description" value="{{ old('email')}}" class="@error('email') is-invalid @enderror">
          @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
         @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputConfirmPassword1">phone</label>
          <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="phone number" name="phone" placeholder="Enter Long description" value="{{ old('phone')}}" class="@error('phone') is-invalid @enderror">
          @error('phone')
          <div class="alert alert-danger">{{ $message }}</div>
         @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" placeholder="Enter guest number" value="{{ old('password')}}" class="@error('password') is-invalid @enderror">
          @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
         @enderror
        </div>

        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
        {{-- <button class="btn btn-light">Cancel</button> --}}
      </form>
    </div>
  </div>
</div>
{{-- Add --}}




  @endsection
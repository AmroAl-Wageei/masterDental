
@extends('Admin.layouts.admin.app')

@section('title' , 'Dashboard')
    

@section('content')
    


{{-- Add  --}}
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Default form</h4>
      <p class="card-description"> Basic form layout </p>
      <form class="forms-sample"  action="{{route('admin.services.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputUsername1">Title</label>
          <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username"  name="name" placeholder="Enter name" value="{{ old('name')}}" class="@error('name') is-invalid @enderror">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
         @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description </label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="description" name="description" placeholder="Enter  description" value="{{ old('description')}}" class="@error('description') is-invalid @enderror">
          @error('description')
          <div class="alert alert-danger">{{ $message }}</div>
         @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Image </label>
          <input type="file" class="form-control" id="exampleInputEmail1" placeholder="image" name="image" placeholder="Enter  image" value="{{ old('image')}}" class="@error('image') is-invalid @enderror">
          @error('image')
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
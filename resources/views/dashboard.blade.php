@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
    
    </div>
</div>
<a href="{{route('Profile')}}">Edit Profile</a>

<form action="{{ url('product_create') }}" method="POST" enctype="multipart/form-data" class="m-4">
    @csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label>Description</label>
      <input type="text" class="form-control" name="description">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" class="form-control" name="price">
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" name="image">
      </div>

      <button type="submit" class="btn btn-primary mt-3">Save</button>

  </form>

<div class="card-body table-responsive mt-3">
    <table class="table table-bordered border-light text-center table-hover  ">
         <thead class="bg-dark text-white">
                  <td>Number</td>
                  <td>Name</td>
                  <td>Price</td>
                  <td>Update</td>
                  <td>Delete</td>
         </thead>
         @foreach ($products as $item)

         <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td><a href="{{route('edit',$item->id) }}" class="btn btn-warning text-white">Update</a></td>
            <td><a href="{{route('delete',$item->id)}}" class="btn btn-danger">Delete</a></td>
        </tr>
         @endforeach


</table>   
</div>
@endsection

@extends('layouts.app')

@section('content')

<div class="col-5 shadow p-3 text-center rounded mb-4 text-white" style="background-color: #5D3891; margin:auto;">
    <p class="text-center text-light fw-bold fs-3">Update Profile</p>
    <form action="{{route('UpdateProfile')}}" method="POST" class="m-4">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label class="mt-3">Name</label>
          <input type="text" class="form-control" name="name" value={{$data->name}}>
        </div>
        <div class="form-group">
          <label class="mt-3">Email</label>
          <input type="email" class="form-control" name="email" value={{$data->email}}>
        </div>
          <button type="submit" class="btn btn-warning mt-3">Update</button>
      </form>
</div>


@endsection
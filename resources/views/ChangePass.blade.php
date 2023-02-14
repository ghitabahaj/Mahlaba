@extends('layouts.app')

@section('content')

<div class="col-5 shadow p-3 text-center rounded mb-4 text-white mt-5" style="background-color: #5D3891; margin:auto;">
    <p class="text-center text-light fw-bold fs-3">Change Password</p>
    <form action="{{route('UpdatePass')}}" method="POST" class="m-4">
        @csrf
        @if (session()->has('success'))
   <div class="alert alert-success">
      {{ session()->get('success') }}
   </div>
     @endif
     @if (session()->has('error'))
   <div class="alert alert-danger">
      {{ session()->get('error') }}
   </div>
   @endif
        <div class="form-group">
            <label class="mt-3">Old Password</label>
            <input type="password" class="form-control" name="old_password" id="myInput">
            @if ($errors->any('old_password'))
            <span class="text-danger">{{$errors->first('old_password')}} </span>
            @endif
            <input type="checkbox" onclick="myFunction()" class="mt-1 me-1">Show Password
          </div>
        <div class="form-group">
          <label class="mt-3">New Password</label>
          <input type="password" class="form-control" name="new_password" id="myInput1">
          @if ($errors->any('new_password'))
          <span class="text-danger">{{$errors->first('new_password')}} </span>
          @endif
          <input type="checkbox" onclick="myFunction()" class="mt-1 me-1">Show Password


        </div>
        <div class="form-group">
          <label class="mt-3">Confirm Password</label>
          <input type="password" class="form-control" name="confirm_password" id="myInput2">
          @if ($errors->any('confirm_password'))
          <span class="text-danger">{{$errors->first('confirm_password')}} </span>
          @endif
          <input type="checkbox" onclick="myFunction()" class="mt-1 me-1">Show Password

        </div>
          <button type="submit" class="btn btn-warning mt-3">Update</button>
      </form>
</div>

<script>
    function myFunction() {
    var x = document.getElementById("myInput");
    var y = document.getElementById("myInput1");
    var z = document.getElementById("myInput2");

  if (x.type === "password" ||y.type === "password"||z.type === "password" ) {
    x.type = "text";
    y.type = "text" ;
    z.type = "text" ;

  } else {
    x.type = "password";
    y.type = "password";
    z.type = "password";

  }
}
</script>
@endsection

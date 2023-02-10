@extends('layouts.app')

@section('content')

<div class="col-5 shadow p-3 text-center rounded mb-4 text-white" style="background-color: #5D3891; margin:auto;">
    <p class="text-center text-light fw-bold fs-3">Update Profile</p>
    <form action="" method="POST" class="m-4">
        @csrf
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

<div class="col-5 shadow p-3 text-center rounded mb-4 text-white mt-5" style="background-color: #5D3891; margin:auto;">
    <p class="text-center text-light fw-bold fs-3">Change Password</p>
    <form action="" method="POST" class="m-4">
        @csrf
        <div class="form-group">
            <label class="mt-3">Old Password</label>
            <input type="password" class="form-control" name="pass" id="myInput">
            <input type="checkbox" onclick="myFunction()" class="mt-1 me-1">Show Password
          </div>
        <div class="form-group">
          <label class="mt-3">New Password</label>
          <input type="password" class="form-control" name="pass" id="myInput1">
          <input type="checkbox" onclick="myFunction()" class="mt-1 me-1">Show Password


        </div>
        <div class="form-group">
          <label class="mt-3">Confirm Password</label>
          <input type="password" class="form-control" name="pass" id="myInput2">
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
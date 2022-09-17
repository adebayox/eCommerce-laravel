@extends('master')
@section("content")
    <div class="container custom-login">
    <div class="row">
            <div class="col-sm-6 col-sm-offset-4">

<form action="login" method="POST">
  <div class="row mb-3">
    @csrf
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <button type="submit" class="btn btn-primary row col-sm-4">Login</button>

</form>

            </div>
    </div>
    </div>

@endsection
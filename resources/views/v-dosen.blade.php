@extends('layout.app')


@section('content')
<div class="container">
    <div class="card">
        <h2>Form Input Table</h2>
    <form>
        <div class="mb-3 w-25 p-3"">
          <label for="exampleInputEmail1" class="form-label ">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp ">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 w-25 p-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 ms-3 form-check ">
          <input type="checkbox" class="form-check-input " id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary w-15 ms-3 mb-3">Submit</button>
      </form>
    </div>
</div>

@endsection



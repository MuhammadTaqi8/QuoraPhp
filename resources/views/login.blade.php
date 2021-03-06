@extends('main')
@section('content')
 
<div class="container p-5">
       
<form action="login" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Enter name</label>
        <input type="text" class="form-control-sm" name="name" id="exampleInputName" aria-describedby="emailHelp">
      </div>
      @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control-sm" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control-sm" name="password" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>

@endsection
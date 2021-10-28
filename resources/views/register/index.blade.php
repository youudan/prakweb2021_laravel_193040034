@extends('layouts.main')

@section('title', $title)

@section('content')

<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration">
      <form>
        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

        <div class="form-floating">
          <input type="text" class="form-control rounded-top" id="nama" placeholder="Name">
          <label for="nama">Name</label>
        </div>

        <div class="form-floating">
          <input type="text" class="form-control" id="username" placeholder="Username">
          <label for="username">Username</label>
        </div>

        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
    </main>
  </div>
</div>
@endsection
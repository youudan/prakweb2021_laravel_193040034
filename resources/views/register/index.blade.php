@extends('layouts.main')

@section('title', $title)

@section('content')

<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration">
      <form action="/register" method="POST">
        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
        @csrf
        <div class="form-floating">
          <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" value="{{ old('name') }}" required>
          <label for="nama">Name</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" value="{{ old('username') }}" required>
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="email" class="form-control  @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}" required>
          <label for="floatingInput">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom  @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required>
          <label for="floatingPassword">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
    </main>
  </div>
</div>
@endsection
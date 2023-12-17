@extends('layouts.main')

@section('container')
<section class="login">
  <div class="container-fluid h-custom">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-3 col-xl-4">

        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <img src="/img/ikanmarlin.png" class="img-fluid">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-4">

        <form action="/login" method="post">
          @csrf
          <h3 class="fw-normal">Sign In</h3>
          <!-- Email input -->
          <div class="form-outline mt-3 mb-4">
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="Enter a valid email address" autofocus required required value="{{ old('email') }}" >
                <label for="email">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
          </div>

          <!-- Password input -->
          <div class="form-floating mt-4">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>

          <div class="text-center text-lg-start mt-3">
            <button class="btn-login btn-lg" type="submit">Login</button>
            <p class="small fw-bold mt-2 pt-1">Don't have an account? <a href="/register"
                class="link-danger">Register</a></p>
          </div>
        </form>

      </div>
    </div>
  </div>
</section>
@endsection
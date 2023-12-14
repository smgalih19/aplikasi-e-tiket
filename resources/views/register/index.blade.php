@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <main class="form-registration">
        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
        
        <form action="/register" method="post">
          @csrf
          <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="name">
            <label for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="email@example.com">
            <label for="email">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" name="phone_number" class="form-control rounded-top @error('phone_number')is-invalid @enderror" id="phone_number" placeholder="phone_number">
            <label for="phone_number">Phone Number</label>
            @error('phone_number')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-floating">
            <div class="col-sm-10">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
                  <label class="form-check-label" for="gender">
                  Laki-Laki
                  </label>
              </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                <label class="form-check-label" for="gender">
                    Perempuan
                </label>
            </div>
          </div>
          </div>

          <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password" placeholder="password">
            <label for="password">Password</label>
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
</div>

@endsection
@extends('layouts.main')

@section('container')
<section class="registrasi">
  <div class="form-registration container-fluid">
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

        <form action="/register" method="post">
          @csrf
          <h3 class="fw-normal">Form Registration</h3>
          <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
            <label for="name">Name</label>
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
          </div>

          <div class="form-outline mt-3 mb-4">
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="Enter a valid email address" required required value="{{ old('email') }}" >
                <label for="email">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            
          <div class="form-floating">
              <input type="text" name="phone_number" class="form-control rounded-top @error('phone_number')is-invalid @enderror" id="phone_number" placeholder="phone_number" required value="{{ old('phone_number') }}">
              <label for="phone_number">Phone Number</label>
              @error('phone_number')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
          </div><br>

          <div class="form-floating">
            <fieldset>
              <label class="gender @error('gender')is-invalid @enderror">Gender : </label>
              @error('gender')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
                <input class="form-check-input" type="radio" name="gender" id="gender1" value="male" style="margin-left: 10px">
                <label class="form-check-label" for="gender1">
                Laki-Laki
                </label>

              <input class="form-check-input" type="radio" name="gender" id="gender2" value="female" style="margin-left: 10px">
              <label class="form-check-label" for="gender2">
                  Perempuan
              </label>

            </fieldset>
          </div>

          <!-- Password input -->
          <div class="form-floating mt-4">
            <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="text-center text-lg-start mt-3">
            <button class="btn btn-lg btn-primary mt-3" type="submit">Register</button>
          </div>
        </form>

      </div>

      <div class="col-md-7 col-lg-5 col-xl-4">
        <img src="/img/ombak.png" class="img-fluid-regis">
      </div>

    </div>
  </div>
</section>

{{-- <div class="container">
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
                  <input class="form-check-input @error('gender')is-invalid @enderror" type="radio" name="gender" id="gender" value="male">
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
</div> --}}

@endsection
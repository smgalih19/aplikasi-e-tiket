@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Update Profile</h5>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-1">
                <a href="/dashboard/update-profile/password/edit" class="btn btn-sm btn-primary">Change
                    Password</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">My Profile</div>
                <div class="card-body text-center">
                    <img class="img-account-profile rounded-circle mb-2"
                        src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <h5 class="name">{{ auth()->user()->name }}</h5>
                    <h6 class="email">{{ auth()->user()->email }}</h6>
                    <hr>
                    <h6 class="phone_number">{{ auth()->user()->phone_number }}</h6>
                </div>
            </div>
        </div>

        <div class="col-xl-8">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form action="{{ route('profile.update', auth()->id()) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Name :</label>
                            <input type="text" name="name"
                                class="form-control rounded-top @error('name')is-invalid @enderror" id="name"
                                placeholder="name" value="{{ auth()->user()->name }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email">Email address :</label>
                            <input type="text" name="email"
                                class="form-control rounded-top @error('email')is-invalid @enderror" id="email"
                                placeholder="email" required value="{{ auth()->user()->email }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone_number">Phone Number :</label>
                            <input type="text" name="phone_number"
                                class="form-control rounded-top @error('phone_number')is-invalid @enderror"
                                id="phone_number" placeholder="phone_number" required
                                value="{{ auth()->user()->phone_number }}">
                            @error('phone_number')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <fieldset>
                                <label class="gender @error('gender') is-invalid @enderror">Gender :</label>
                                @error('gender')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <input class="form-check-input mx-1" type="radio" name="gender" id="gender1"
                                    value="male" {{ auth()->user()->gender == 'male' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gender1">
                                    Laki-Laki
                                </label>

                                <input class="form-check-input mx-1" type="radio" name="gender" id="gender2"
                                    value="female" {{ auth()->user()->gender == 'female' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gender2">
                                    Perempuan
                                </label>
                            </fieldset>
                        </div>
                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

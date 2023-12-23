@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Create Ticket</h5>
    </div>

    <div class="col-lg-8">

        <form method="post" action="/dashboard/data-ticket" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label @error('name') is-invalid @enderror">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Tiket Sepeda Motor"
                    autofocus>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label @error('price') is-invalid @enderror">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="50000">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label @error('description') is-invalid @enderror">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>

            <button type="submit" class="btn btn-primary">Create Ticket</button>
        </form>
    </div>
@endsection

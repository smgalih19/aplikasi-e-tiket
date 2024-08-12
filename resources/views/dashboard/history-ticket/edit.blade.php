@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Edit Data Order Visitor</h5>
    </div>

    <div class="col-lg-8">

        <form method="post" action="/dashboard/history-ticket/{{ $transactions->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id_ticket" class="form-label @error('id_ticket') is-invalid @enderror">Id_Ticket</label>
                <input type="text" class="form-control" id="id_ticket" name="id_ticket" autofocus
                    value="{{ @old('id_ticket', $transactions->external_id) }}">
                @error('id_ticket')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="name_buyer" class="form-label @error('name') is-invalid @enderror">Name</label>
                <input type="text" class="form-control" id="name_buyer" name="name_buyer" autofocus
                    value="{{ @old('name_buyer', $transactions->name_buyer) }}">
                @error('name_buyer')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label @error('phone_number') is-invalid @enderror">No Handphone</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" autofocus
                    value="{{ @old('phone_number', $transactions->phone_number) }}">
                @error('phone_number')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date_ticket" class="form-label @error('date_ticket') is-invalid @enderror">Visit Date</label>
                <input type="date" class="form-control" id="date_ticket" name="date_ticket" autofocus
                    value="{{ @old('date_ticket', $transactions->date_ticket) }}">
                @error('date_ticket')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Ticket</button>
        </form>
    </div>
@endsection

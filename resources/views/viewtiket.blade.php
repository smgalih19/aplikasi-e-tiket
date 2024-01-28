@extends('layouts.main')
@section('container')
    <div class="viewtiket">
        <div class="container p-5">
            <div class="row justify-content-around">
                <div class="tiket col mt-5 mx-4">
                    <h5 class="tiket-pilih text-white">Pilih tiket dibawah ini</h5>
                    <hr class="text-white">

                    @foreach ($tickets as $ticket)
                        <div class="macam-tiket">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input type="hidden" name="id" value="{{ $ticket->id }}">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <b>{{ $ticket->name }}</b>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h3 class="text-danger">IDR {{ $ticket->price }}</h3>
                            <p>{{ $ticket->description }}.</p>
                        </div><br>
                    @endforeach

                </div>

                {{-- Awal Bagian Tiket Terpilih --}}
                <div class="tiket col mt-5 mx-4 text-white">
                    <h5 class="tiket-pilih">Isi data lengkap dibawah ini</h5>
                    <hr>

                    <form action="{{ route('transaction.create') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="name">Nama :</label>
                            <input type="text" name="name"
                                class="form-control rounded-top @error('name')is-invalid @enderror" id="name"
                                placeholder="Nama lengkap" required>
                        </div>

                        <div class="mb-4">
                            <label for="email">Email :</label>
                            <input type="text" name="email"
                                class="form-control rounded-top @error('email')is-invalid @enderror" id="email"
                                placeholder="Alamat email" required>
                        </div>

                        <div class="mb-4">
                            <label for="phone_number">No Telepon :</label>
                            <input type="text" name="phone_number"
                                class="form-control rounded-top @error('phone_number')is-invalid @enderror"
                                id="phone_number" placeholder="Masukan no telepon" required>
                        </div>

                        <div class="row mb-4">
                            <div class="col counter">
                                <label for="tiket_qty">Jumlah Tiket :</label>
                                <span class="down mx-2" onClick='decreaseCount(event, this)'>-</span>
                                <input type="text" value="1">
                                <span class="up" onClick='increaseCount(event, this)'>+</span>
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Lanjutkan Pembayaran</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function increaseCount(a, b) {
            var input = b.previousElementSibling;
            var value = parseInt(input.value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;
        }

        function decreaseCount(a, b) {
            var input = b.nextElementSibling;
            var value = parseInt(input.value, 10);
            if (value > 1) {
                value = isNaN(value) ? 0 : value;
                value--;
                input.value = value;
            }
        }
    </script>
@endsection()

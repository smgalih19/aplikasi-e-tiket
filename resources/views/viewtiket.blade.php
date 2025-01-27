@extends('layouts.main')
@section('container')
    <div class="viewtiket">
        <div class="container p-5">
            <div class="row justify-content-around">
                <div class="tiket col mt-5 mx-4">
                    <h5 class="tiket-pilih text-white">Pilih tiket dibawah ini</h5>
                    <hr class="text-white">

                    <form action="{{ route('transaction.create') }}" method="post">
                        @foreach ($tickets as $ticket)
                            {{-- <div class="macam-tiket">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ticket_id" value="{{ $ticket->id }}"
                                                id="flexRadioDefault{{ $ticket->id }}">
                                            <label class="form-check-label" for="flexRadioDefault{{ $ticket->id }}">
                                                <b>{{ $ticket->name }}</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h3 id="price" class="text-danger">IDR {{ $ticket->price }}</h3>
                                <p>{{ $ticket->description }}.</p>
                            </div><br> --}}
                            <div class="macam-tiket" onclick="selectTicket('{{ $ticket->id }}')">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ticket_id" value="{{ $ticket->id }}"
                                                id="flexRadioDefault{{ $ticket->id }}">
                                            <label class="form-check-label" for="flexRadioDefault{{ $ticket->id }}">
                                                <b>{{ $ticket->name }}</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h3 id="price" class="text-danger">IDR {{ $ticket->price }}</h3>
                                <p>{{ $ticket->description }}.</p>
                            </div>
                        @endforeach
                        
                </div>

                {{-- Awal Bagian Tiket Terpilih --}}
                <div class="tiket col mt-5 mx-4 text-white">
                    <h5 class="tiket-pilih">Isi data lengkap dibawah ini</h5>
                    <hr>

                    @csrf
                    <div class="mb-4">
                        <label for="name">Nama :</label>
                        <input type="text" name="name_buyer"
                            class="form-control rounded-top @error('name')is-invalid @enderror" id="name"
                            placeholder="Masukan nama lengkap" required>
                    </div>

                    <div class="mb-4">
                        <label for="email">Email :</label>
                        <input type="email" name="email"
                            class="form-control rounded-top @error('email')is-invalid @enderror" id="email"
                            placeholder="nama@example.com" required>
                    </div>

                    <div class="mb-4">
                        <label for="phone_number">No Telepon :</label>
                        <input type="text" name="phone_number"
                            class="form-control rounded-top @error('phone_number')is-invalid @enderror" id="phone_number"
                            placeholder="Masukan no telepon" required>
                    </div>

                    <div class="mb-4">
                        <label for="date_ticket">Pilih Tanggal Kunjungan :</label>
                        <input type="date" name="date_ticket"
                            class="form-control rounded-top @error('date_ticket')is-invalid @enderror" id="date_ticket" style="width: 150px" required>
                    </div>

                    <div class="row mb-4">
                        <div class="col counter">
                            <label for="tiket_qty">Jumlah Tiket :</label>
                            <span class="down mx-1" onClick='decreaseCount(event, this)'>-</span>
                            <input type="text" value="1" name="qty">
                            <span class="up mx-1" onClick='increaseCount(event, this)'>+</span>
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
    <script>
        // Set minimum date untuk input date
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('date_ticket').setAttribute('min', today);
    </script>

<script>
    // JavaScript untuk menambahkan logika seleksi pada kotak
    function selectTicket(ticketId) {
        // Uncheck semua radio button
        document.querySelectorAll('.macam-tiket').forEach((div) => {
            div.classList.remove('active');
            div.querySelector('input[type="radio"]').checked = false;
        });

        // Tandai kotak terpilih
        const selectedDiv = document.querySelector(`#flexRadioDefault${ticketId}`).closest('.macam-tiket');
        selectedDiv.classList.add('active');
        selectedDiv.querySelector('input[type="radio"]').checked = true;
    }
</script>
@endsection()

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

                    <form>
                        <div class="row mb-3">
                            <label for="specificSizeInputName" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Nama Lengkap"
                                    aria-label="First name">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Alamat Email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="no-handphone" class="col-sm-2 col-form-label">No Telepon</label>
                            <div class="col-sm-10">
                                <input type="no-handphone" class="form-control" id="no-handphone"
                                    placeholder="Nomor Telepon">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2">Jumlah Tiket</label>
                            <div class="col-sm-10 counter">
                                <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                <input type="text" value="1">
                                <span class="up" onClick='increaseCount(event, this)'>+</span>
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="option1">
                                    <label class="form-check-label" for="gridRadios1">
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-success">Lanjutkan Pembayaran</button>
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

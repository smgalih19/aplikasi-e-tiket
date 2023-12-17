@extends('layouts.main')
@section('container')
    <div class="viewtiket">
        <div class="container p-5">
            <div class="row justify-content-around">
                <div class="tiket col mt-5 mx-4">
                    <h5 class="tiket-pilih text-white">Pilih tiket dibawah ini</h5>
                    <hr class="text-white">
                    <div class="macam-tiket">
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <b>Tiket Sepeda Motor</b>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h3 class="text-danger">IDR 20.000</h3>
                        <p>Lihat informasi Penukaran Tiket, dan Syarat Ketentuan <span class="text-primary klik-cursor"
                                data-bs-toggle="modal" data-bs-target="#exampleModal"> di sini.</span></p>

                        {{-- Modal --}}
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi Tiket</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Syarat dan Ketentuan</p>
                                        <ul>
                                            <li>Harga tiket Pintu Masuk sudah termasuk pajak.</li>
                                            <li>Tiket yang sudah dibeli tidak dapat dikembalikan.</li>
                                            <li>Pembeli wajib mengisi data diri pribadi saat memesan.</li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>

                    <div class="macam-tiket">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                <b>Tiket Jeep / Sedan dan sejenisnya</b>
                            </label>
                        </div>
                        <hr>
                        <h3 class="text-danger">IDR 60.000</h3>
                        <p>Lihat informasi Penukaran Tiket, dan Syarat Ketentuan <span class="text-primary klik-cursor"
                                data-bs-toggle="modal" data-bs-target="#exampleModal"> di sini.</span></p>
                    </div>
                </div>

                {{-- Awal Bagian Tiket Terpilih --}}
                <div class="tiket col mt-5 mx-4 text-white">
                    <h5 class="tiket-pilih">Isi data lengkap dibawah ini</h5>
                    <hr>

                    <form>
                        <div class="row mb-3">
                            <label for="specificSizeInputName" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="First name">
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
                                <input type="no-handphone" class="form-control" id="no-handphone" placeholder="Nomor Telepon">
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
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                                    <label class="form-check-label" for="gridRadios1">
                                    Laki-Laki
                                    </label>
                                </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
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

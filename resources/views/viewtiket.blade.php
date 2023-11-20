@extends('layouts.main')
@section('container')
    <div class="viewtiket">
        <div class="container p-5">
            <div class="row justify-content-around">
                <div class="tiket col mt-5 mx-4">
                    <h5 class="tiket-pilih">Pilih tiket dibawah ini</h5>
                    <div class="macam-tiket">

                        <p>Tiket Sepeda Motor</p>
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
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><br>
                    <div class="macam-tiket">
                        <p>Tiket Jeep / Sedan dan sejenisnya</p>
                        <hr>
                        <h3 class="text-danger">IDR 60.000</h3>
                        <p>Lihat informasi Penukaran Tiket, dan Syarat Ketentuan <span class="text-primary klik-cursor"
                                data-bs-toggle="modal" data-bs-target="#exampleModal"> di sini.</span></p>
                    </div>
                </div>

                {{-- Awal Bagian Tiket Terpilih --}}
                <div class="tiket col mt-5 mx-4">
                    <h5 class="tiket-pilih">Tiket yang dipilih</h5>
                    <div class="edit-tiket">
                        <p>Tiket Jeep / Sedan dan sejenisnya</p>
                    </div>
                    <h3 class="text-danger">IDR 60.000</h3>
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
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
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
                        <button type="submit" class="btn btn-primary">Lanjutkan</button>
                    </form>

                </div>


            </div>
        </div>
    </div>
@endsection()

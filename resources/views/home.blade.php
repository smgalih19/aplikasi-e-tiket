@extends('layouts.main')
@section('container')
    <div class="container-fluid" style="padding: 0">
        <img src="img/viewpantai.jpg" class="img-fluid" style="width: 1440px; height: 20%;" alt="...">
    </div>

    <section class="search-tiket">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5 info-panel">
                    <label for="tanggal" class="form-label col-form-label-sm mx-4">
                        <h5>Pilih tanggal kunjungan</h5>
                    </label>
                    <div class="col-lg-10">
                        <div class="d-flex">
                            <input type="date" class="form-control form-control-sm mx-4" id="tanggal" required />
                            <a class="btn btn-primary" href="/viewtiket" role="button">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container text-center mt-5">
            <div class="row justify-content-center about-us">
                <div class="col-md-7 text-center mt-5 mb-5">
                    <h3>Tentang <span>Kami</span></h3>
                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe sunt ipsam ducimus illum quisquam
                        quas, quibusdam possimus voluptas perspiciatis id dolores quae et dolore ut animi at officiis natus
                        aliquid.
                    </p>
                </div>

                <h4>Keindahan Wisata <span>Pangandaran</span></h4>
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/marlin.png" class="card-img-top">
                            <h5 class="card-title">Pangandaran</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam, vel.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="img/marlin.png" class="card-img-top">
                            <h5 class="card-title">Pangandaran</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, perferendis.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="img/marlin.png" class="card-img-top">
                            <h5 class="card-title">Pangandaran</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, suscipit.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

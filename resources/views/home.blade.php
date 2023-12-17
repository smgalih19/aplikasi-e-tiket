@extends('layouts.main')
@section('container')
    <div class="container-fluid" style="padding: 0">
        <img src="img/viewpantai.jpg" class="img-fluid" style="width: 1440px; height: 20%;">
    </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="info-panel col-5 justify-content-center">
                    <h5 class="text-center">Beli Tiket Sekarang Juga</h5>
                    <div class="w-full d-flex justify-center">
                        <a class="btn btn-home mx-auto" href="/viewtiket" role="button">
                            Pilih Tiket
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <section id="about" class="about">
        <div class="container text-center mt-5">
            <div class="row justify-content-center about-us">

                <h4>Informasi Terkait Wisata di <span>Pangandaran</span></h4>
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/marlin.png" class="card-img-top">
                            <h5 class="card-title">Pantai Barat Pangandaran</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam, vel.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="img/marlin.png" class="card-img-top">
                            <h5 class="card-title">Cagar Alam Pangandaran</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, perferendis.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="img/marlin.png" class="card-img-top">
                            <h5 class="card-title">Pantai Timur Pangandaran</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, suscipit.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

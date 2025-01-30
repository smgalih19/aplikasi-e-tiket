@extends('layouts.main')
@section('container')
    <div class="container-fluid" style="padding: 0">
        <img src="img/viewpantai.jpg" class="img-fluid">
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

                <h4>Pelayanan <span>Kami</span></h4>
                <p>Kami mengutamakan kepuasan dalam setiap pelayanan pengunjung, pelayanan terbaik kami berupa</p>
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/icon1_pay.png" class="card-img-top">
                            <h5 class="card-title">Kemudahan Pembayaran Berbagai Pilihan</h5>
                            <p class="card-text">Menyediakan berbagai opsi pembayaran online, seperti kartu kredit, debit, atau metode pembayaran elektronik lainnya.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="img/icon3_transaction.png" class="card-img-top">
                            <h5 class="card-title">Kemudahan Pembelian Tiket dimanapun</h5>
                            <p class="card-text">Beli tiket wisata tidak lagi antri lama, melalui website e-Ticket lebih mudah pesan tiket kapan saja dan dimana saja</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="img/icon2_time.png" class="card-img-top">
                            <h5 class="card-title">Menghemat Waktu Pembayaran Tiket</h5>
                            <p class="card-text">Pengunjung hanya perlu menunjukan e-Ticket di pintu masuk untuk pengecekan yang prosesnya tidak akan lama</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

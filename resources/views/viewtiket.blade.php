@extends('layouts.main')
@section('container')
  <div class="viewtiket">
    <div class="container p-5">
      <div class="row justify-content-around">
        <div class="tiket col mt-5 mx-4">
          <h5 class="tiket-pilih">Pilih tiket dibawah ini</h5>  
            <div class="macam-tiket">
              <p>Tiket Kendaraan Motor</p><hr>
              <h3 class="text-danger">IDR 20.000</h3>
              <p>Lihat informasi Penukaran Tiket, dan Syarat Ketentuan <span class="text-primary klik-cursor" data-bs-toggle="modal" data-bs-target="#exampleModal"> di sini.</span></p>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

            </div><br>
            <div class="macam-tiket">
              <p>Tiket Kendaraan Motor</p><hr>
              <h3 class="text-danger">IDR 20.000</h3>
              <p>Lihat informasi Penukaran Tiket, dan Syarat Ketentuan <span class="text-primary klik-cursor" data-bs-toggle="modal" data-bs-target="#exampleModal"> di sini.</span></p>
            </div>
          </div>

              <div class="tiket col mt-5 mx-4">
              <h5 class="tiket-pilih">Tiket yang dipilih</h5>
                <div class="edit-tiket">
                  <p>Tiket Kendaraan Motor</p>
                </div>
              <h3 class="text-danger">18.000</h3><hr>
              </div>

      </div>
    </div>
  </div>
  
@endsection()

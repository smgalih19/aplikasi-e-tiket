@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h5>Welcome to Dashboard Admin {{ auth()->user()->name }}</h5>
</div>

<div class="row">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col">
              <div class="mb-1">Total Transaksi</div>
              <div class="h5 mb-0">10.000</div>
          </div>
          <div class="col-auto">
              <i class="bi bi-bar-chart-line"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col">
              <div class="mb-1">Total Transaksi</div>
              <div class="h5 mb-0">10.000</div>
          </div>
          <div class="col-auto">
              <i class="bi bi-bar-chart-line"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col">
              <div class="mb-1">Total Transaksi</div>
              <div class="h5 mb-0">10.000</div>
          </div>
          <div class="col-auto">
              <i class="bi bi-bar-chart-line"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
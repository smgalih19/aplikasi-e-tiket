@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h5>Data Ticket</h5>
</div>

<div class="table-responsive small">
  <a href="/dashboard/data-ticket/create" class="btn btn-primary mb-3">Create Ticket</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Sepeda Motor</td>
        <td>20000</td>
        <td>Ini Adalah Ticket Resmi Pintu Masuk Jenis Sepeda Motor</td>
        <td>
          <a href="" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
          <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
          <a href="" class="badge bg-danger"><i class="bi bi-x-circle"></i></a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h5>Data Ticket</h5>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-download"></i> Download</button>
    </div>
  </div>
</div>

<div class="table-responsive small">
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
        <td>Acep</td>
        <td>2023-12-7, 14:30:25</td>
        <td>2023-12-9</td>
        <td><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-square"></i></button></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
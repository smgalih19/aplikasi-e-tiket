@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Data Order</h5>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-download"></i>
                    Download</button>
            </div>
        </div>
    </div>

    <div class="table-responsive small">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id_Ticket</th>
                    <th scope="col">Name</th>
                    <th scope="col">Transaction Date</th>
                    <th scope="col">Expired Date Ticket</th>
                    <th scope="col">Status Transaction</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>IT00321</td>
                    <td>Acep</td>
                    <td>2023-12-7, 14:30:25</td>
                    <td>2023-12-9</td>
                    <td><span class="badge text-bg-success">Success</span></td>
                    <td><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-square"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>IT00322</td>
                    <td>Ujang</td>
                    <td>2023-12-3, 14:30:25</td>
                    <td>2023-12-5</td>
                    <td><span class="badge text-bg-warning">On Process</span></td>
                    <td><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-square"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>IT00323</td>
                    <td>Asep</td>
                    <td>2023-12-10, 14:30:25</td>
                    <td>2023-12-12</td>
                    <td><span class="badge text-bg-danger">Fail</span></td>
                    <td><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-square"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

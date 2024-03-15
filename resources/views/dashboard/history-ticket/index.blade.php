@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Data Order Visitor</h5>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-download"></i>
                    Download</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
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
                                @foreach ($transactions as $ts)
                                    <tr>
                                        <td>{{$ts->external_id}}</td>
                                        <td>{{$ts->name_buyer}}</td>
                                        <td>{{$ts->created_at}}</td>
                                        <td>{{$ts->expired_date_ticket}}</td>
                                        <td>
                                            @if ($ts->status_transaction == "PAID")
                                            <span class="badge text-bg-success">Success</span>
                                            @elseif ($ts->status_transaction == "EXPIRED")
                                            <span class="badge text-bg-danger">Expired</span>
                                            @else
                                            <span class="badge text-bg-warning">Pending</span>
                                            @endif
                                        </td>
                                        <td><button type="button" class="btn btn-secondary btn-sm"><i
                                                    class="bi bi-pencil-square"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

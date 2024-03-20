@extends('dashboard-user.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Data Order Ticket</h5>
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
                                    <th scope="col">Qty</th>
                                    <th scope="col">Price</th>
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
                                        <td>{{$ts->qty}}</td>
                                        <td>{{$ts->amount}}</td>
                                        <td>
                                            @if ($ts->status_transaction == "PAID")
                                            <span class="badge text-bg-success">Success</span>
                                            @elseif ($ts->status_transaction == "EXPIRED")
                                            <span class="badge text-bg-danger">Expired</span>
                                            @else
                                            <span class="badge text-bg-warning">Pending</span>
                                            @endif
                                        </td>

                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Detail Ticket
                                            </button>
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">e-Ticket Pangandaran</h1>
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

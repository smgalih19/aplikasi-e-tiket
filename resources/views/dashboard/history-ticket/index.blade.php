@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Data Order Visitor</h5>
    </div>

    <div class="row">
        <div class="col mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive small">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id_Ticket</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Transaction Date</th>
                                    <th scope="col">Visit Date</th>
                                    <th scope="col">Status Transaction</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $ts)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$ts->external_id}}</td>
                                        <td>{{$ts->name_buyer}}</td>
                                        <td>{{$ts->created_at}}</td>
                                        <td>{{$ts->date_ticket}}</td>
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
                                            <a href="/dashboard/history-ticket/{{ $ts->id }}/edit"
                                                class="badge bg-warning"><i class="bi bi-pencil-square"></i>
                                            </a>
    
                                            <form action="/dashboard/history-ticket/{{ $ts->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="badge bg-danger border-0"
                                                    onclick="return confirm('Are you sure?')"><span><i
                                                            class="bi bi-x-circle"></i></span></button>
                                            </form>
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

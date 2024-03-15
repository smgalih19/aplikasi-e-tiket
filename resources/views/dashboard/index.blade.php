@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Welcome to Dashboard Admin : {{ auth()->user()->name }}</h5>
    </div>

    <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="mb-1">Total Users</div>
                            <div class="h5 mb-0">{{$users}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-people" style="font-size: 2rem; color: cornflowerblue;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 mb-3 mb-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="mb-1">Total Transaction</div>
                            <div class="h5 mb-0">{{$transaction}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-ticket-detailed" style="font-size: 2rem; color: cornflowerblue;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 mb-3 mb-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="mb-1">Total Ticket Available</div>
                            <div class="h5 mb-0">{{$tickets}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-check2" style="font-size: 2rem; color: cornflowerblue;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

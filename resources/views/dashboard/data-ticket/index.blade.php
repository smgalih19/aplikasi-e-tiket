@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Entry Data Ticket</h5>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive small">
        <a href="/dashboard/data-ticket/create" class="btn btn-primary mb-3">Create Ticket</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name Ticket</th>
                    <th scope="col">Price Ticket</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->name }}</td>
                        <td><span style="color: red">IDR</span> {{ $post->price }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            <a href="/dashboard/data-ticket/{{ $post->id }}/edit" class="badge bg-warning"><i
                                    class="bi bi-pencil-square"></i></a>

                            <form action="/dashboard/data-ticket/{{ $post->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span><i
                                            class="bi bi-x-circle"></i></span></button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex">
               Payment List
            </div>
            <div class="card-body">
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">User</th>
                            <th scope="col">Hall</th>
                            <th scope="col">Booking ID</th>
                            <th scope="col">Payment Type</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $sl=1;
                        @endphp
                        @foreach ($paymentmanages as $paymentmanages)
                        <tr>
                            <th scope="row">{{ $sl++ }}</th>
                            <td>{{ $paymentmanages->users->name ?? '' }}</td>
                            <td>{{ $paymentmanages->hallmanages->hall_name ?? '' }}</td>
                            <td>{{ $paymentmanages->booking_manage_id ?? '' }}</td>
                            <td>{{ $paymentmanages->payment_type ?? '' }}</td>
                            <td>{{ $paymentmanages->status ?? '' }}</td>
                            {{-- <td>
                                <a class="btn btn-sm btn-warning" href="">Edit</a>
                                <form action="" method="post" onsubmit="return confirmDelete()">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td> --}}
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('dashboard.details', $paymentmanages->id) }}">Details</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            
                <div class="container mb-3">
                    <div class="card">
                        <div class="card-header d-flex">
                            Payment List
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Hall</th>
                                        <th scope="col">Payment Type</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sl = 1;
                                    @endphp
                                    @foreach ($paymentmanages as $paymentmanage)
                                        <tr>
                                            <th scope="row">{{ $sl++ }}</th>
                                            <td>{{ $paymentmanage->users->name ?? '' }}</td>
                                            <td>{{ $paymentmanage->hallmanages->hall_name ?? '' }}</td>
                                            <td>{{ $paymentmanage->payment_type ?? '' }}</td>
                                            <td>{{ $paymentmanage->status ?? '' }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary" href="{{ route('dashboard.details', $paymentmanage->id) }}">Details</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $paymentmanages->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

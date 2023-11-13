@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                <div class="container mb-3">
                    <div class="card">
                        <div class="card-header d-flex">
                            Booking List
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Hall</th>
                                        <th scope="col">Booked Date</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sl = 1;
                                    @endphp
                                    
                                    @foreach ($bookingmanages as $bookingmanage)
                                        <tr>
                                            <th scope="row">{{ $sl++ }}</th>
                                            <td>{{ $bookingmanage->hallmanages->hall_name ?? '' }}</td>
                                            <td>{{ $bookingmanage->booked_date ?? '' }}</td>
                                            <td>$ {{ $bookingmanage->amount ?? '' }}</td>
                                            <td>{{ $bookingmanage->status ?? '' }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary" href="{{ route('booking_details' , $bookingmanage->id) }}">Pay Now</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $bookingmanages->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>

        




            </div>
        </div>
    </div>




@endsection

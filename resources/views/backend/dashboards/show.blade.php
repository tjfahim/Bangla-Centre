@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')


    <div class="container">
        <div class="card">
            <div class="card-header">Personal Details Informations</div>
            <div class="card-body">
                <p>Name: {{ $dashboard->name ?? '' }}</p>
                <p>Email: {{ $dashboard->email ?? '' }}</p>
                <p>Phone: {{ $dashboard->phone ?? '' }}</p>
                <p>Address: {{ $dashboard->address ?? '' }}</p>
                <p>Comment: {!! $dashboard->comment ?? '' !!}</p>
            </div>
            <div class="card-header">Booking Details Informations</div>
            <div class="card-body">
                <p>Booked Date: {{ $dashboard->booked_date ?? '' }}</p>
                <p>Hall: {{ $dashboard->hall ?? '' }}</p>
                <p>Period: {{ $dashboard->period ?? '' }}</p>
                <p>Booking Type: {{ $dashboard->booking_type ?? '' }}</p>
                <p>Price: {{ $dashboard->price ?? '' }}</p>
                <p>Discount: {{ $dashboard->discount ?? '' }}</p>
                <p>Description: {!! $dashboard->description ?? '' !!}</p>
                <p>Image:
                <div class="text-center">
                    @if (file_exists(storage_path() . '/app/public/searchpage/' . $dashboard->image))
                        <img src="{{ asset('storage/searchpage/' . $dashboard->image) }}" height="200">
                    @else
                        iamge nai
                        <!-- <img src="{{ asset('img/default.png') }}"> -->
                    @endif
                </div>
                </p>
                <p>Total Paid: {{ $dashboard->total_paid ?? '' }}</p>
            </div>
            <div class="card-footer m-auto">
                <a class="btn btn-sm btn-primary" href="{{ route('admin.index') }}"><i class="bi bi-x"></i> Close</a>
            </div>
        </div>
    </div>
@endsection

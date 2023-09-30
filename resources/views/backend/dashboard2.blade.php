@extends('backend.layouts2.master')


@section('main_content')
    @include('backend.layouts2.includes.message')

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


       <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Customer Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">



                            <a href="{{ route('person.index') }}">
                            <div class="card-body">
                                <h5 class="card-title">Customer</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalUsers }}</h6>
                                    </div>
                                </div>
                            </div>
                            </a>

                        </div>
                    </div><!-- End User Card -->

                    <!-- Shift Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">


                            <a href="{{ route('shift.index') }}">
                                <div class="card-body">
                                    <h5 class="card-title">Shift</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-clock"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalShifts }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div><!-- End Shift Card -->

                    <!-- Hall Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">



                            <a href="{{ route('hall_manage.index') }}">
                            <div class="card-body">
                                <h5 class="card-title">Halls</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-house"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalHalls }}</h6>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                    </div><!-- End Hall Card -->

                    <!-- Booking Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">



                            <a href="{{ route('booking.index') }}">
                            <div class="card-body">
                                <h5 class="card-title">Bookings</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-calendar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalBookings }}</h6>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                    </div><!-- End Hall Card -->
                    <!-- Booking Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">



                            <a href="{{ route('payment_dashboard.index') }}">
                            <div class="card-body">
                                <h5 class="card-title">Payments</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalPayments }}</h6>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                    </div><!-- End Hall Card -->





                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">



            </div><!-- End Right side columns -->

        </div>
    </section>



@endsection

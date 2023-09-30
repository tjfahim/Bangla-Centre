<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
                        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
                        crossorigin="anonymous">


                    <section class="h-100 gradient-custom">
                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-lg-10 col-xl-8">
                                    <div class="card" style="border-radius: 10px;">
                                        @include('backend.layouts2.includes.message')
                                        <div class="card-header px-4 py-5">
                                            <h5 class="text-muted mb-0">Payment Details</h5>
                                        </div>
                                        <div class="card-body p-4">
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <p class="lead fw-normal mb-0" style="color: green;">
                                                    {{ $bookingmanage->hall_name }}</p>
                                                <p class="small text-muted mb-0"><b>Booking Date :
                                                        {{ $bookingmanage->booking_date }}</b></p>
                                            </div>
                                            <div class="card shadow-0 border mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img class="img-fluid"
                                                                src="{{ asset('uploads/images/' . $HallManage->image) }}">
                                                        </div>
                                                        <div
                                                            class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                            <p class="text-muted mb-0">Organization Type:
                                                                <b>{{ $bookingmanage->organization_type }}</b></p>
                                                        </div>
                                                        <div
                                                            class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                            <p class="text-muted mb-0 small">Capacity:
                                                                <b>{{ $HallManage->capacity }}</b></p>
                                                        </div>
                                                        <div
                                                            class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                            <p class="text-muted mb-0 small">Price:
                                                                <b>${{ $bookingmanage->amount }}</b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between pt-2">
                                                <p class="fw-bold mb-0">Shift</p>
                                                <p class="text-muted mb-0"><span
                                                        class="fw-bold me-4">{{ $ShiftsModel->name }}</span></p>
                                            </div>
                                            <div class="d-flex justify-content-between pt-2">
                                                <p class="fw-bold mb-0">Payment Type</p>
                                                <p class="text-muted mb-0"><span
                                                        class="fw-bold me-4">{{ $paymentmanage->payment_type }}</span></p>
                                            </div>
                                            <div class="d-flex justify-content-between pt-2">
                                                <p class="fw-bold mb-0">Payment Status</p>
                                                <p class="text-muted mb-0"><span
                                                        class="fw-bold me-4">{{ $paymentmanage->status }}</span></p>
                                            </div>

                                        </div>
                                        <div class="card-footer border-0 px-4 py-5"
                                            style="background-color: green; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                            <h5
                                                class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">
                                                Total
                                                paid: <span class="h2 mb-0 ms-2">${{ $bookingmanage->amount }}</span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
                    </script>



                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<x-app-layout>
 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>





                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
                    crossorigin="anonymous">

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
                                        <th scope="col">Check in Date</th>
                                        <th scope="col">Check out Date</th>
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
                                            <td>{{ $bookingmanage->hall_manage_id ?? '' }}</td>
                                            <td>{{ $bookingmanage->check_in_date ?? '' }}</td>
                                            <td>{{ $bookingmanage->check_out_date ?? '' }}</td>
                                            <td>{{ $bookingmanage->amount ?? '' }}</td>
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

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
                </script>




            </div>
        </div>
    </div>










</x-app-layout>

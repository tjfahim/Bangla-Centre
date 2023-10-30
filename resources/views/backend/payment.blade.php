@extends('backend.layouts.master')

@section('main_content')




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



    <style>


        .card-top a {
            float: left;
            margin-top: 0.7rem;
        }

        #logo {
            font-family: 'Dancing Script';
            font-weight: bold;
            font-size: 1.6rem;
        }

        .card-body {
            background-image: url("https://i.imgur.com/4bg1e6u.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media(max-width:768px) {
            .card-body {
                background-image: url("https://i.imgur.com/4bg1e6u.jpg");
                background-size: cover;
                background-repeat: no-repeat;
            }

            .card-top {
                padding: 0.7rem 1rem;
            }
        }

        .row {
            margin: 0;
        }

        .upper {
            justify-content: space-evenly;
        }

        #three {
            border-radius: 1rem;
            width: 22px;
            height: 22px;
            margin-right: 3px;
            border: 1px solid blue;
            text-align: center;
            display: inline-block;
        }

        #payment {
            margin: 0;
            color: blue;
        }

        .icons {
            margin-left: auto;
        }

        form span {
            color: rgb(179, 179, 179);
        }

        form {
            padding: 2vh 0;
        }

        input {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247);
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        .header {
            font-size: 1.5rem;
        }

        .left {
            background-color: #ffffff;
            padding: 2vh;
        }

        .left img {
            width: 2rem;
        }

        .left .col-4 {
            padding-left: 0;
        }

        .right .item {
            padding: 0.3rem 0;
        }

        .right {
            background-color: #ffffff;
            padding: 2vh;
        }

        .col-8 {
            padding: 0 1vh;
        }

        .lower {
            line-height: 2;
        }

        a {
            color: black;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }

        input[type=checkbox] {
            width: unset;
            margin-bottom: unset;
        }

        #cvv {
            background-image: linear-gradient(to left, rgba(255, 255, 255, 0.575), rgba(255, 255, 255, 0.541)), url("https://img.icons8.com/material-outlined/24/000000/help.png");
            background-repeat: no-repeat;
            background-position-x: 95%;
            background-position-y: center;
        }

        #cvv:hover {}
    </style>

<div style="background-image: url('{{ asset('ui/searchpage') }}/img/background.jpg'); background-size: cover;">

    <div class="container p-md-5 p-sm-0"  style="padding-left: 20% !important; padding-right: 20% !important;">
        <div class="card">
            @include('backend.layouts2.includes.message')
            <div class="card-top border-bottom text-center">

            </div>
            <div class="card-body p-md-5 p-sm-0">

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="right border">
                            <div class="header">Order Summary</div>
                            <h5>{{ $hall->hall_name }}</h5>
                            <div class="row item">
                                <div class="col-md-4 col-sm-12 align-self-center"><img class="img-fluid"
                                        src="{{ asset('uploads/images/' . $hall->image) }}"></div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="row"><b>Booked Date: {{ $booking->booked_date }}</b></div>
                                    <div class="row"><b>Price: ${{ $booking->amount }}</b></div>
                                    <div class="row text-muted">{!! $hall->hall_description !!}</div>
                                    <div class="row">Booking Date: {{ $booking->booking_date }}</div>
                                </div>
                            </div>
                            <hr>
                            <div class="row lower">
                                <div class="col text-left">Subtotal</div>
                                <div class="col text-right">${{ $booking->amount }}</div>
                            </div>
                            <div class="row lower">
                                <div class="col text-left"><b>Total to pay</b></div>
                                <div class="col text-right"><b>${{ $booking->amount }}</b></div>
                            </div>


                            <div class="d-flex justify-content-around">
                                <span>
                                    <form action="/stripe" method="post">
                                        @csrf
                                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-key="{{ $stripe_key }}"
                                            data-amount={{ $booking->amount*100 }} data-name="Bangla Centre" data-description="Hall Charge"
                                            data-image="{{ asset('ui/backend') }}/assets/images/Capture-modified.png" data-locale="auto" data-currency="usd"
                                            data-panel-label="Pay Now" data-email="{{ Auth::user()->email }}"></script>
                                    </form>

                                    @if (session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif

                                    <a href="{{ route('processTransaction') }}" class="btn btn-primary" style="padding-top: 8px; padding-bottom: 8px; font-size: 11px; font-weight: bold;">Pay
                                        with PayPal</a>


                                </span>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

            <div>
            </div>
        </div>
    </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
@endsection

@extends('backend.layouts.master')


@section('main_content')
    @include('backend.layouts2.includes.message')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">





    <!DOCTYPE html>
    <html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Sona Template">
        <meta name="keywords" content="Sona, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ asset('ui/halldetails') }}/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('ui/halldetails') }}/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('ui/halldetails') }}/css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('ui/halldetails') }}/css/flaticon.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('ui/halldetails') }}/css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('ui/halldetails') }}/css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('ui/halldetails') }}/css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('ui/halldetails') }}/css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('ui/halldetails') }}/css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('ui/halldetails') }}/css/style.css" type="text/css">
    </head>

    <body>


        <!-- Breadcrumb Section Begin -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div style="text-align: center">
                            <h2>Room Details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section End -->

        <!-- Room Details Section Begin -->
        <section class="room-details-section spad">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="room-details-item">
                            <img src="{{ asset('public/uploads/images/' . $hallmanage->image) }}" alt="">
                            <div class="rd-text">
                                <div class="rd-title">
                                    <h3>{{ $hallmanage->hall_name }}</h3>
                                </div>
                                <h2>${{ $price }}<span></span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>{{ $hallmanage->capacity }}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Status:</td>
                                            <td>{{ $hallmanage->status }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="f-para">{!! $hallmanage->hall_description !!}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Room Details Section End -->


        <!-- Search model Begin -->
        <div class="search-model">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="search-close-switch"><i class="icon_close"></i></div>
                <form class="search-model-form">
                    <input type="text" id="search-input" placeholder="Search here.....">
                </form>
            </div>
        </div>
        <!-- Search model end -->

        <!-- Js Plugins -->
        <script src="{{ asset('ui/halldetails') }}/js/jquery-3.3.1.min.js"></script>
        <script src="{{ asset('ui/halldetails') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('ui/halldetails') }}/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('ui/halldetails') }}/js/jquery.nice-select.min.js"></script>
        <script src="{{ asset('ui/halldetails') }}/js/jquery-ui.min.js"></script>
        <script src="{{ asset('ui/halldetails') }}/js/jquery.slicknav.js"></script>
        <script src="{{ asset('ui/halldetails') }}/js/owl.carousel.min.js"></script>
        <script src="{{ asset('ui/halldetails') }}/js/main.js"></script>
    </body>

    </html>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
@endsection

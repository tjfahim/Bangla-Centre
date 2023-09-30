<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('ui/backend2') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('ui/backend2') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('ui/backend2') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('ui/backend2') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('ui/backend2') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('ui/backend2') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('ui/backend2') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('ui/backend2') }}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center">
                <img src="{{ asset('ui/backend') }}/assets/images/2023-08-logo-footer-2-1.png" alt="No Image">
                <span class="d-none d-lg-block">Bangla Centre</span>
            </a>

        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href=""
                        data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2"> {{ Auth::user()->name ?? '' }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.edit') }}">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span></a>

                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ asset('ui/backend') }}/#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="btn btn-sm btn-primary">Logout</button>
                                    </form>
                                </span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header>

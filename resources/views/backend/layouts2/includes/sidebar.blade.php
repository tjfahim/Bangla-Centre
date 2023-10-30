<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <style>
        /*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

#sidebarnew {
    width: 250px;
    position: fixed;
    top: 0;
    left: -250px;
    height: 100vh;
    z-index: 999;
    background: #fff;
    color: #fff;
    transition: all 0.4s;
    overflow-y: scroll;
    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.2);
    margin-top: 60px;
    padding-top:10px;

}


#sidebarnew.active {
    left: 0;
}

#dismiss {
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    background: #7386D5;
    position: absolute;
    top: 4px;
    right: 10px;
    cursor: pointer;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

#dismiss:hover {
    background: #fff;
    color: #7386D5;
}

.overlay {
    display: none;
    position: fixed;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.7);
    z-index: 998;
    opacity: 0;
    transition: all 0.5s ease-in-out;
}
.overlay.active {
    display: block;
    opacity: 1;
}

#sidebarnew .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebarnew ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebarnew ul p {
    color: #fff;
    padding: 10px;
}

#sidebarnew ul li a {
    padding: 10px;
    margin-left:25px;
    font-size: 0.9em;
    display: block;
}

#sidebarnew ul li a:hover {
    color: #7386D5;
    background: ##f6f9ff;
}

#sidebarnew ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
    position: absolute;
    top: 0;
    right: 0;
}
.container-fluid{
    width: 100%;
    padding-right: 10%;
    padding-left: 88%;
    margin-right: auto;
    margin-left: auto;
    margin-top: -4px;
}
#sidebarCollapse{
    display:none;
}

@media only screen and (max-width: 1200px) {
    #sidebarCollapse {
    display: block;
  }
}


    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebarnew">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>
            <ul class="sidebar-nav" id="sidebar-nav" >

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('admin.index') }}">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('profile.user') }}">
                        <i class="bi bi-person-bounding-box"></i><span>Profile</span>
                    </a>
                </li>
                @if(auth()->user()->role === 'admin')

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('person.index') }}">
                        <i class="bi bi-people"></i><span>Customer</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('hall_manage.index') }}">
                        <i class="bi bi-journal-text"></i><span>Hall Manage</span>
                    </a>
                </li>
                @endif

                <li class="nav-item">
                    @if(auth()->user()->role === 'admin')
                    <a class="nav-link collapsed" href="{{ route('booking.index') }}">
                        @else
                        <a class="nav-link collapsed" href="{{ route('booking.index.user') }}">
                            @endif
                        <i class="bi bi-card-checklist"></i><span>Hall Booking</span>
                    </a>
                </li>
                <li class="nav-item">
                    @if(auth()->user()->role === 'admin')
                    <a class="nav-link collapsed" href="{{ route('payment_dashboard.index') }}">
                        @else
                        <a class="nav-link collapsed" href="{{ route('payment_dashboard.index.user') }}">
                            @endif
                        <i class="bi bi-currency-dollar"></i><span>Payment</span>
                    </a>
                </li>
                @if(auth()->user()->role === 'admin')
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('admin.settings') }}">
                        <i class="bi bi-wrench-adjustable-circle"></i><span>Settings</span>
                    </a>
                </li>
                @endif

            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content" style="margin-top:60px;">
            <nav class=" ">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                </div>
            </nav>
        </div>
    </div>

    <div class="overlay"></div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebarnew").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebarnew').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebarnew').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>


<aside id="sidebar" class="sidebar" >

<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.index') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('profile.user') }}">
            <i class="bi bi-person-bounding-box"></i><span>Profile</span>
        </a>
    </li>
    @if(auth()->user()->role === 'admin')

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('person.index') }}">
            <i class="bi bi-people"></i><span>Customer</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('hall_manage.index') }}">
            <i class="bi bi-journal-text"></i><span>Hall Manage</span>
        </a>
    </li>
    @endif

    <li class="nav-item">
        @if(auth()->user()->role === 'admin')
        <a class="nav-link collapsed" href="{{ route('booking.index') }}">
            @else
            <a class="nav-link collapsed" href="{{ route('booking.index.user') }}">
                @endif
            <i class="bi bi-card-checklist"></i><span>Hall Booking</span>
        </a>
    </li>
    <li class="nav-item">
        @if(auth()->user()->role === 'admin')
        <a class="nav-link collapsed" href="{{ route('payment_dashboard.index') }}">
            @else
            <a class="nav-link collapsed" href="{{ route('payment_dashboard.index.user') }}">
                @endif
            <i class="bi bi-currency-dollar"></i><span>Payment</span>
        </a>
    </li>
    @if(auth()->user()->role === 'admin')
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.settings') }}">
            <i class="bi bi-wrench-adjustable-circle"></i><span>Settings</span>
        </a>
    </li>
    @endif

</ul>

</aside>
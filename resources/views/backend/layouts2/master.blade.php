@include('backend.layouts2.includes.navbar')

<!-- End Header -->

    <!-- ======= Sidebar ======= -->

    @include('backend.layouts2.includes.sidebar')

<!-- End Sidebar-->

    <main id="main" class="main">

        @yield('main_content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    @include('backend.layouts2.includes.footer')

<!-- End Footer -->

    <a href="{{ asset('ui/backend') }}/#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    
    <!-- Vendor JS Files -->
    <script src="{{ asset('ui/backend2') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('ui/backend2') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('ui/backend2') }}/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="{{ asset('ui/backend2') }}/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('ui/backend2') }}/assets/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('ui/backend2') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('ui/backend2') }}/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('ui/backend2') }}/assets/vendor/php-email-form/validate.js"></script>

   
    
    <!-- Template Main JS File -->
    <script src="{{ asset('ui/backend2') }}/assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            function status_update() {
             console.log('Updating status...');
                $.ajax({
                    type: "GET",
                    url: '/status_update',
                    success: function(result) {
                     console.log('Updating status. result..');                       
                    },
                    error: function() {
                        $('#statusElement').text('Error updating status');
                    }
                });
            }
               setInterval(status_update, 3600000);
        });
    </script>
    <script>
        $(document).ready(function() {
            function status_update_pending() {
             console.log('Updating status pending...');
                $.ajax({
                    type: "GET",
                    url: '/status_update_pending',
                    success: function(result) {
                     console.log('Updating status pending. result..');                       
                    },
                    error: function() {
                        $('#statusElement').text('Error updating status');
                    }
                });
            }
               setInterval(status_update_pending, 3600000);
        });
    </script>


</body>

</html>

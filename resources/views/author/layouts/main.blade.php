<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ url('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/css/vendor.bundle.base.css') }}">

    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <style>
        #sidebar-cont {
            max-width: 15%;
            transition: all 0.5s
        }

        #sidebar-cont.active {
            max-width: 5%;
            transition: all 0.5s
        }
    </style>
</head>

<body>
    <div class="container-scroller d-flex ">

        @include('author.layouts.sidebar')

        <div class="container-fluid page-body-wrapper">
            @include('author.layouts.header')

            <div class="main-panel">
                @yield('content')
                @include('author.layouts.footer')
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#button-toggle').click(function() {

                $('#sidebar-cont').toggleClass('active', 500, "easeOutSine")

            })
        })
    </script>

    <!-- base:js -->
    <script src="{{ url('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ url('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ url('assets/js/off-canvas.js') }}"></script>
    <script src="{{ url('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('assets/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ url('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{ url('assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
</body>

</html>

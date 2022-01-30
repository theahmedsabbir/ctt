<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="description" content="CTT" />
        <meta name="keywords" content="wish,ctt, ahmed sabbir, shahariar ikbal, ahmed akib tareq" />
        <meta name="author" content="Wish" />

        <!-- Page Title -->
        <title>CTT</title>

        <!-- CSS here -->
        @include('frontend.includes.css')

        <!-- custom css -->
        @yield('page-css')
    </head>
    <body class="">
        <div id="wrapper" class="clearfix">
            <!-- preloader -->
            @include('frontend.includes.css')

            <!-- Header -->
            @include('frontend.includes.header')

            <!-- Start main-content -->
            @yield('content')

            <!-- Footer -->
            @include('frontend.includes.footer')
        </div>
        <!-- end wrapper -->

        <!-- Footer Scripts -->
        @include('frontend.includes.scripts')

        <!-- Custom js here -->
        @yield('page-js')
    </body>

</html>

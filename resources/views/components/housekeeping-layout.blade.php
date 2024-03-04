<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ setting('hotel_name') }} | @stack('title') </title>
    <meta name="description" content="Tailwind Dashboard Template">

    <!-- Development css (used in all pages) -->
    <link rel="stylesheet" id="stylesheet" href="{{ asset('assets/housekeeping/src/css/style.css') }}">
    <!-- Production css (used in all pages) -->
    <!-- <link rel="stylesheet" href="dist/css/style.css"> -->

    <!--start::Customizer Stylesheets (Only for demo purpose)-->
    <link rel="stylesheet" href="{{ asset('assets/housekeeping/src/css/customizer.css') }}">
    <!--end::Customizer Stylesheets (Only for demo purpose)-->

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="src/img/favicon.png">
</head>

<body class="font-sans text-base font-normal text-gray-600 dark:text-gray-400 dark:bg-gray-900">
<!-- wrapper -->
{{ $slot }}

<!--start::Global javascript (used in all pages)-->


<script src="{{ asset('assets/housekeeping/vendors/alpinejs/dist/cdn.min.js') }}"></script><!-- core js -->
<script src="{{ asset('assets/housekeeping/vendors/flatpickr/dist/flatpickr.min.js') }}"></script><!-- input date -->
<script src="{{ asset('assets/housekeeping/vendors/flatpickr/dist/plugins/rangePlugin.js') }}"></script><!-- input range date -->
<script src="{{ asset('assets/housekeeping/vendors/@yaireo/tagify/dist/tagify.min.js') }}"></script><!-- input tags -->
<script src="{{ asset('assets/housekeeping/vendors/pristinejs/dist/pristine.min.js') }}"></script><!-- form validation -->
<script src="{{ asset('assets/housekeeping/vendors/simple-datatables/dist/umd/simple-datatables.js') }}"></script><!--sort table-->
<!--end::Global javascript (used in all pages)-->

<!-- Minify Global javascript (for production purpose) -->
<!-- <script src="dist/js/scripts.js"></script> -->
<!--start::Demo javascript ( initialize global javascript )-->
<script src="{{ asset('assets/housekeeping/src/js/demo.js') }}"></script>

<script src="{{ asset('assets/housekeeping/vendors/chart.js/dist/chart.min.js') }}"></script><!-- charts -->
<!-- chart config -->
<script src="{{ asset('assets/housekeeping/src/js/chart/cms.js') }}"></script>

<!--start::Vendor javascript (only on this page)-->
<script src="{{ asset('assets/housekeeping/vendors/jsvectormap/dist/js/jsvectormap.min.js') }}"></script><!-- vector map -->
<script src="{{ asset('assets/housekeeping/vendors/jsvectormap/dist/maps/world.js') }}"></script><!-- world vector map -->
<!--end::Vendor javascript (only on this page)-->
<!--start::Call vendor ( initialize vendor javascript )-->
<script src="{{ asset('assets/housekeeping/src/js/vendor.js') }}"></script>

<!--start::Customizer js ( Only for demo purpose )-->
<script src="{{ asset('assets/housekeeping/src/js/customizer.js') }}"></script>
</body>

</html>

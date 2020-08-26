<!DOCTYPE html>
<html id="html" lang="en" data-layout="main" data-theme="main">
<head>

    <!-- Page title -->
    <title>Natalia Schlossberg Art Studio</title>
    <!-- /Page title -->

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- /Meta -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/core.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css?v=2') }}">
    <!-- /Styles -->

</head>
<body>


<!-- Navigation -->
@include('layouts.navigation')
<!-- /Navigation -->


<!-- Main Container -->
@yield('content')
<!-- /Main Container -->


<!-- Search -->
@include('layouts.search')
<!-- Search -->


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('assets/js/core.min.js') }}"></script>
<script src="{{ asset('assets/js/theme.min.js') }}"></script>
<!-- /Scripts -->

</body>
</html>

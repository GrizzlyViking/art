<!DOCTYPE html>
<html id="html" lang="en" data-layout="main" data-theme="main">
<head>

    <!-- Page title -->
    <title>Clarity - Responsive Multipurpose Clean and Minimal Site Template</title>
    <!-- /Page title -->

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- /Meta -->

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/core.min.css">
    <link rel="stylesheet" href="assets/css/theme.min.css?v=2">
    <!-- /Styles -->

</head>
<body>


<!-- Navigation -->
@include('layout.navigation')
<!-- /Navigation -->


<!-- Main Container -->
@yield('content')
<!-- /Main Container -->


<!-- Search -->
@include('layout.search')
<!-- Search -->


<!-- Scripts -->
<script src="assets/js/core.min.js"></script>
<script src="assets/js/theme.min.js"></script>
<!-- /Scripts -->

</body>
</html>

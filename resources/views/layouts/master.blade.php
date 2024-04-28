<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Simone - Creative Personal CV/Resume HTML Template">
    <meta name="author" content="Paul">
    <title>{{ env('APP_NAME', 'Autism&ME') }}</title>
    @include('layouts.head')
</head>

<body class="fixed-footer">
    <!-- Loader -->
    <div class="loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!-- Click capture -->
    @include('layouts.header1')
    <div>
        @yield('content')
    </div>
    <!--======  footer area =======-->
    @include('layouts.footer')
    <!--=====  End of footer area ========-->
    <!-- End of .container -->
    @include('layouts.footer_scripts')


</body>
</html>

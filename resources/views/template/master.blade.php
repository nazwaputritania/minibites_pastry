<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title', 'Shop Homepage - Start Bootstrap Template')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('template-pastry/assets/favicon.ico') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('template-pastry/css/styles.css') }}" rel="stylesheet" />
    @stack('css')
</head>
<body>
    @include('template.pisah.navbar')

    <!-- Main content-->
    @include('template.pisah.main')
    

    @include('template.pisah.footer')

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('template-pastry/js/scripts.js') }}"></script>
    @stack('js')
</body>
</html>

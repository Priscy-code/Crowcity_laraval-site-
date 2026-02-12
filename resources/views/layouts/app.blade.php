<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <script src="{{ asset('js/navbar.js') }}"></script>

</head>
<body>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

</body>
</html>

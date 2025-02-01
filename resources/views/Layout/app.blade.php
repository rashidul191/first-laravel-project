<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Laravel Project</title>
</head>

<body>

    {{-- Header Section Start  --}}
    @include('Layout.header')
    {{-- Header Section End  --}}

    {{-- Page Main Content Start  --}}
    @yield('page-main-content')
    {{-- Page Main Content End  --}}


    {{-- Footer Section Start  --}}
    @include('Layout.footer')
    {{-- Footer Section End  --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>

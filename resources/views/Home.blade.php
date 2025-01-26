<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Laravel Project</title>
</head>

<body>
    @include('common-part.Header')

    <h4>Here Page Main Content</h4>
    <ul>
        {{-- @for ($i = 0; $i <= $sum; $i++)
            <li>Items {{ $i }} </li>
        @endfor --}}

        @php
            $numbers = range(1, $sum);
        @endphp

        @foreach ($numbers as $number)
            <li> Items : {{ $number }} </li>
        @endforeach

    </ul>

    @include('common-part.Footer')

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web - @yield('title')</title>

    {{-- Bootstrap 5 : Start --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Bootstrap 5 : End --}}

    {{-- Bootstrap Icon : Start --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    {{-- Bootstrap Icon : End --}}

    {{-- Custom CSS : Start --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Custom CSS : End --}}

</head>

<body>


    {{-- Wrapper : Start --}}
    <div class="wrapper">

        @auth
            @include('templates.navbar')
            @include('templates.sidebar')
        @else
            @include('templates.navbar')
        @endauth

        <div class="container m-3 content">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
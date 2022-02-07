<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    @yield('styles')
    <link rel="stylesheet" href={{ url("css/bvselect.css") }} />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @yield('scripts')
    <script src={{ url("js/bvselect.js") }}></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=d391fd21-8248-4af2-b18d-72f15cfe6cdf&lang=ru_RU" type="text/javascript"/>
    <script src="mapbasics.js" type="text/javascript"></script>
</head>
<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    @include('partials.modals')

</body>
</html>

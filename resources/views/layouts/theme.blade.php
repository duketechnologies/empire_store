<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

{{--    <style>--}}
{{--        body {--}}
{{--            font-family: 'Inter', sans-serif;--}}
{{--        }--}}
{{--    </style>--}}
    @yield('styles')
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scripts')
</head>
<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    @include('partials.modals')


</body>
</html>

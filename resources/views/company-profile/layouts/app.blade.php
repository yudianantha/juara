<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('company-profile.partials.sidenav')
    @include('company-profile.partials.navbar')
    <main>
        @yield('company-profile')
    </main>
    @include('company-profile.partials.footer')
    @include('company-profile.partials.script')
</body>
</html>

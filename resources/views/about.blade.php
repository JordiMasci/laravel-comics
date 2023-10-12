<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('head')
</head>

<body>
    @include('layouts.header')
        <main>@yield('layouts.main-about')</main>
    @include('layouts.footer')
</body>

</html>
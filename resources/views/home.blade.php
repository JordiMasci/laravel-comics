<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('head')
</head>

<body>
    @include('layouts.header')
    <div class="container">
        <main>@yield('main')</main>
    </div>
    @include('layouts.footer')
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>ЕЛЕКТРОН-Інтернет магазин побутової техніки, електроніки, комп'ютерної техніки, ноутбуків, телевізорів, комп'ютерів </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.styles')
</head>

<body>
    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
        @include('layouts.popup-banner')
        @include('layouts.popup-wrapper')
        @include('layouts.header')
        @include('layouts.menu')
        @yield('sliderwrapper')
        @yield('content')
        @include('layouts.footer')
    </div>
    <!-- Main Wrapper End Here -->
    @include('layouts.scripts')
</body>

</html>
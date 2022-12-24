<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    {!! SEO::generate(true) !!}

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- † -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url('/') }}">
    <meta name="robots" content="noindex">

    <link rel="icon" href="https://keysuggest.io/favicon.ico" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @stack('css')
</head>

<body class="flex flex-col min-h-screen @if(Request::is('/')){{ 'bg-white' }}@else{{ 'bg-gray-50' }}@endif">
    @include('partials.header')

    <main class="flex-grow overflow-x-hidden">
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('js')
</body>

</html>
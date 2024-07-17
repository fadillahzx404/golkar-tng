@php
use Illuminate\Support\Facades\Vite;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>@yield('title')</title>



    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')


</head>

<body class="antialiased relative">



    {{-- Navbar --}}
    @if (!request()->is('transaction_payment*'))
        @include('includes.navigation')
    @endif

    <div class="min-h-screen">
    {{-- Page Content --}}
    @yield('content')
    </div>

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>

</html>

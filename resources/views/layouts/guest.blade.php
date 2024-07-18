@php
    use Illuminate\Support\Facades\Vite;
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Login') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased bg-primary min-h-screen">


    <div class="relative overflow-hidden px-4 max-sm:py-8 min-h-screen">
        {{ $slot }}



        {{-- RIGHT --}}
        <div class="absolute lg:top-12 max-sm:-top-6 left-24 z-10 ">
            <img src="{{ asset('images/star.png') }}" class="w-24" alt="">
        </div>
        <div class="absolute lg:-top-8 max-sm:top-24 lg:left-96 max-sm:left-8 z-10">
            <img src="{{ asset('images/star.png') }}" class="lg:w-24 max-sm:w-12" alt="">
        </div>
        <div class="absolute top-64 lg:left-12 max-sm:left-2 z-10">
            <img src="{{ asset('images/star.png') }}" class="w-12" alt="">
        </div>
        <div class="absolute lg:bottom-24 max-sm:bottom-12 lg:left-48 max-sm:left-12 z-10">
            <img src="{{ asset('images/star.png') }}" class="w-24" alt="">
        </div>

        {{-- LEFT --}}
        <div class="absolute lg:top-12 max-sm:top-24 lg:right-64 max-sm:-right-6 z-10">
            <img src="{{ asset('images/star.png') }}" class="w-24" alt="">
        </div>
        <div class="absolute top-64 right-24 z-10 max-sm:hidden">
            <img src="{{ asset('images/star.png') }}" class="w-12" alt="">
        </div>
        <div class="absolute lg:bottom-24 max-sm:bottom-2 lg:right-48 max-sm:right-12 z-10">
            <img src="{{ asset('images/star.png') }}" class="lg:w-24 max-sm:w-12" alt="">
        </div>
    </div>





    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

    <script type='text/javascript'>
        $('#btn-eye').click(function() {
            if ('password' == $('#pass-input').attr('type')) {
                $('#pass-input').prop('type', 'text');
            } else {
                $('#pass-input').prop('type', 'password');
            }
        });
        $('#btn-eye-two').click(function() {
            if ('password' == $('#password_confirmation').attr('type')) {
                $('#password_confirmation').prop('type', 'text');
            } else {
                $('#password_confirmation').prop('type', 'password');
            }
        });
    </script>
</body>



</html>

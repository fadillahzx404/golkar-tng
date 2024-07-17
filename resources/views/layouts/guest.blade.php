@php
use Illuminate\Support\Facades\Vite;
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div
        class="min-h-screen flex flex-col  sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900 max-sm:px-5">




            {{ $slot }}

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

@extends('layouts.guest')


@section('page-content')
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <p class="text-2xl font-semibold">Login</p>

            <p class="text-gray-600 pt-2">Silahkan masuk untuk melanjutkan.</p>
            <div class="divider"></div>
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">NIK</span>
                </div>
                <input name="auth" type="text" placeholder="Masukan NIK anda" :value="old('auth')"
                    class="input input-bordered focus:border-warning focus:outline-none w-full" required
                    autocomplete="auth" />

            </label>

            <label class="form-control w-full pb-4">
                <div class="label">
                    <span class="label-text">Password</span>
                </div>
                <input id="password" name="password" type="password" :value="old('password')"
                    placeholder="Masukan password anda"
                    class="input input-bordered focus:border-warning focus:outline-none w-full" required
                    autocomplete="password" />
            </label>


            <div class="py-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                    </a>
                @endif

            </div>

            <div class="flex justify-between items-center">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('auth-admin-golkar.index') }}">
                    {{ __('Login as Admin Golkar') }}
                </a>
                <div class="flex items-center">
                    <a href="/register" class="ms-4 btn btn-sm rounded-md">Daftar</a>

                    <x-button class="ms-4 bg-warning">
                        {{ __('Masuk') }}
                    </x-button>
                </div>

            </div>
        </form>
    </x-authentication-card>
@endsection

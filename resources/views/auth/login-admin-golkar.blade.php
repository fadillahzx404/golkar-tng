<x-guest-layout>
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

            <p class="text-2xl font-semibold">Login Admin Golkar</p>

            <p class="text-gray-600 pt-2">Silahkan masuk untuk melanjutkan.</p>
            <div class="divider"></div>
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Email</span>
                </div>
                <input name="auth" type="email" placeholder="Masukan email anda" :value="old('auth')"
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
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

            </div>

            <div class="flex justify-between items-center">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="/login">
                    {{ __('Login as Saksi') }}
                </a>
                <div class="flex items-center">

                    <x-button class="ms-4 bg-warning">
                        {{ __('Masuk') }}
                    </x-button>
                </div>

            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

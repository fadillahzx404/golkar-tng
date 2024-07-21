@extends('layouts.guest')


@section('page-content')
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <p class="text-2xl font-semibold">Register</p>
            <p class="text-gray-600 pt-2">Silahkan Isilah form berikut ini untuk mendaftar. </p>

            <div class="divider"></div>


            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">NIK</span>
                </div>
                <input name="nik" type="number" placeholder="Masukan NIK anda" :value="old('nik')"
                    class="input input-bordered focus:border-warning focus:outline-none w-full" required autofocus
                    autocomplete="nik" />

            </label>

            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Nama</span>
                </div>
                <input name="name" type="text" placeholder="Masukan nama anda" :value="old('name')"
                    class="input input-bordered focus:border-warning focus:outline-none w-full" required
                    autocomplete="name" />

            </label>


            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Nomor Telepon</span>
                </div>
                <input name="phone_number" type="number" placeholder="Masukan nomer telepon" :value="old('phone_number')"
                    class="input input-bordered focus:border-warning focus:outline-none w-full" required
                    autocomplete="phone_number" />

            </label>

            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Kota/Kabupaten</span>
                </div>
                <input name="kota" type="text" value="Kota Tangerang"
                    class="input input-disabled font-bold text-black focus:border-warning focus:outline-none w-full"
                    readonly />

            </label>

            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Kecamatan</span>
                </div>
                <select class="select select-bordered focus:outline-none focus:border-warning" name="kecamatan"
                    id="kecamatan" required>
                    <option disabled selected value=""> - Pilih Kecamatan - </option>
                    @foreach ($kecamatan as $kc)
                        <option value="{{ $kc->Id }}">{{ $kc->nama }}</option>
                    @endforeach
                </select>
            </label>

            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Kelurahan</span>
                </div>
                <select class="select select-bordered focus:outline-none focus:border-warning" name="kelurahan"
                    id="kelurahan" required>
                    <option disabled selected value="">- Pilih Kelurahan -</option>
                    <option value="1">Star Wars</option>
                    <option>Harry Potter</option>
                    <option>Lord of the Rings</option>
                    <option>Planet of the Apes</option>
                    <option>Star Trek</option>
                </select>
            </label>

            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Jenis Saksi</span>
                </div>
                <select class="select select-bordered focus:outline-none focus:border-warning" name="kelurahan"
                    id="kelurahan" required>
                    <option disabled selected value="">- Pilih Jenis Saksi -</option>
                    <option value="">Saksi Pilkada</option>
                    <option value="">Saksi Pilgub</option>

                </select>
            </label>

            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">TPS (Tempat Pemilihan Suara)</span>
                </div>
                <select class="select select-bordered focus:outline-none focus:border-warning" name="TPS" id="TPS"
                    required>
                    <option disabled selected value="">- Pilih TPS -</option>
                    @for ($i = 1; $i <= 25; $i++)
                        <option value="TPS {{ $i }}"> TPS {{ $i }}</option>
                    @endfor


                </select>
            </label>


            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Password</span>
                </div>
                <input id="password" name="password" type="password" :value="old('password')"
                    placeholder="Masukan password anda"
                    class="input input-bordered focus:border-warning focus:outline-none w-full" required
                    autocomplete="password" />
            </label>



            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Sudah punya akun ?') }}
                </a>

                <x-button class="ms-4 bg-warning">
                    {{ __('Daftar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
@endsection

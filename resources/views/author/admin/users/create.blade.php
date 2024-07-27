@extends('layouts.app')

@section('title')
    Tambah Users
@endsection

@section('page-content')
    <div class="container lg:px-12  pt-12 lg:mt-8 max-lg:px-10 max-sm:px-5 mx-auto min-h-screen w-full overflow-auto">


        <p class="text-3xl font-bold underline underline-offset-8">@yield('title')</p>
        <section class="section lg:py-8">

            <div class="relative overflow-x-auto shadow-lg borde bg-white border-gray-200 sm:rounded-lg p-5">
                <div class="title-table grid">
                    <div class="flex justify-between">
                        <div class="grid w-full">
                            <p class="text-lg font-bold">Data User</p>
                            <p class="text-sm font-light text-gray-400">Tambah user di sini.
                            </p>
                        </div>

                    </div>

                    <hr class="mb-3 mt-2 border-gray-400" />

                </div>

                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data"
                    class="grid p-3 space-y-1 pt-2 text-2xl">
                    @csrf
                    @method('POST')
                    <label class="form-control w-full ">
                        <div class="label">
                            <span class="label-text">Roles</span>
                        </div>
                        <select class="select select-bordered" name="roles">
                            @php
                                $values = ['Saksi Pilgub', 'Saksi Pilkada', 'Admin', 'Master Admin'];
                            @endphp

                            @foreach ($values as $val)
                                <option value="{{ Str::upper($val) }}">
                                    {{ $val }}</option>
                            @endforeach
                        </select>

                    </label>

                    <label class="form-control w-full ">
                        <div class="label">
                            <span class="label-text">NIK</span>
                        </div>
                        <input type="number" name="nik"
                            class="input input-bordered w-full " />
                    </label>

                    <label class="form-control w-full ">
                        <div class="label">
                            <span class="label-text">Nama</span>
                        </div>
                        <input type="text" name="name"
                            class="input input-bordered w-full " />
                    </label>

                    <label class="form-control w-full ">
                        <div class="label">
                            <span class="label-text">Email</span>
                        </div>
                        <input type="text" name="email"
                            class="input input-bordered w-full " />
                    </label>

                    <label class="form-control w-full ">
                        <div class="label">
                            <span class="label-text">Nomor Telepon</span>
                        </div>
                        <input type="text" name="phone_number"
                            class="input input-bordered w-full " />
                    </label>

                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Kecamatan</span>
                        </div>
                        <select class="select select-bordered focus:outline-none focus:border-warning" name="kecamatan"
                            id="kecamatan" required>
                            <option disabled selected value=""> - Pilih Kecamatan - </option>
                            @foreach ($kecamatan as $kc)
                                <option value="{{ $kc->kode }}">
                                    {{ $kc->nama }}</option>
                            @endforeach
                        </select>
                    </label>

                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Kelurahan</span>
                        </div>
                        <select class="select select-bordered focus:outline-none focus:border-warning" name="kelurahan"
                            id="kelurahan">
                            <option disabled selected value="">- Pilih Kelurahan -</option>
                        </select>
                    </label>

                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">TPS (Tempat Pemilihan Suara)</span>
                        </div>
                        <select class="select select-bordered focus:outline-none focus:border-warning" name="tps"
                            id="TPS" >
                            <option disabled selected value=""> - Pilih TPS - </option>
                        </select>
                    </label>


                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Password</span>
                        </div>

                        <input id="password" name="password" type="password"
                            class="input input-bordered focus:border-warning focus:outline-none w-full" required
                            autocomplete="password" />

                    </label>

                    <div class="flex space-x-2 justify-end pt-4">
                        <a href="{{ route('users.index') }}" class="btn btn-sm text-black">Kembali</a>
                        <button type="submit" class="btn btn-sm btn-accent">Simpan</button>
                    </div>

                </form>


            </div>


        </section>


    </div>
@endsection


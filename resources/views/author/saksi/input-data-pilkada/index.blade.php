@extends('layouts.app')

@section('title')
    Input Data Pilkada
@endsection

@section('page-content')
    <div class="container lg:px-12 pt-12 lg:mt-8 max-lg:px-10 max-sm:px-5 mx-auto min-h-screen">

        <div class="flash-data" data-flash="{!! \Session::get('status') !!}"></div>
        <p class="text-3xl font-bold underline underline-offset-8">@yield('title')</p>
        <section class="section lg:pt-8 py-8">
            <div class="relative overflow-x-auto shadow-lg border rounded-lg bg-white  border-gray-200  p-5">
                <div class="title-table grid ">
                    <div class="flex justify-between">
                        <div class="grid place-content-center">
                            <p class="text-lg font-bold">@yield('title')</p>
                            <p class="text-sm font-light text-gray-400">Silakan isi form Data Pilkada disini.
                            </p>
                        </div>
                    </div>
                    <hr class="mb-3 mt-2 border-gray-400" />
                    @if (Session::has('error'))
                        <div id="alert-2"
                            class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                            role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ms-3 text-sm font-medium">
                                {{ Session::get('error') }}
                                @php
                                    Session::forget('error');
                                @endphp
                            </div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                                data-dismiss-target="#alert-2" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div id="alert-3"
                            class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                            role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ms-3 text-sm font-medium">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                                data-dismiss-target="#alert-3" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @endif
                    <form action="{{ route('save-pilkada') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Kota/Kabupaten</span>
                            </div>
                            <select
                                class="select select-bordered input-disabled font-bold text-black focus:outline-none focus:border-warning"
                                name="kota" id="kota" required>
                                <option value="3671" selected>Kota Tangerang</option>
                            </select>
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Kecamatan</span>
                            </div>
                            <select
                                class="select select-bordered input-disabled font-bold text-black focus:outline-none focus:border-warning"
                                name="kecamatan" id="kecamatan" required>
                                @foreach ($kecamatan as $kc)
                                    <option value="{{ $kc->kode }}" selected>{{ $kc->nama }}</option>
                                @endforeach
                            </select>
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Kelurahan</span>
                            </div>
                            <select
                                class="select select-bordered input-disabled font-bold text-black focus:outline-none focus:border-warning"
                                name="kelurahan" id="kelurahan" required>
                                @foreach ($kelurahan as $kl)
                                    <option value="{{ $kl->kode }}" selected>{{ $kl->nama }}</option>
                                @endforeach
                            </select>
                        </label>

                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">TPS (Tempat Pemilihan Suara)</span>
                            </div>
                            <select
                                class="select select-bordered input-disabled font-bold text-black focus:outline-none focus:border-warning"
                                name="tps" id="tps" required>
                                <option selected value="{{ $tps }}">{{ $tps }}</option>
                            </select>
                        </label>

                        <hr class="border-b border-2 max-sm:mx-12 mt-8 border-gray-500 border-dashed" />

                        <div class="w-full flex justify-center py-8">
                            <div class="rounded-full w-36 h-36 bg-gray-400 text-center place-content-center">
                                <i class="fa-solid fa-user-group fa-5x"></i>
                            </div>
                        </div>


                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Walikota Dan Wakil Walikota Paslon 1</span>
                            </div>
                            <input name="paslon1" type="text" value="246"
                                class="input input-bordered focus:border-warning focus:outline-none w-full" />

                        </label>


                        <hr class="border-b border-2 max-sm:mx-12 mt-8 border-gray-500 border-dashed" />

                        <div class="w-full flex justify-center py-8">
                            <div class="rounded-full w-36 h-36 bg-gray-400 text-center place-content-center">
                                <i class="fa-solid fa-user-group fa-5x"></i>
                            </div>
                        </div>


                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Walikota Dan Wakil Walikota Paslon 2</span>
                            </div>
                            <input name="paslon2" type="text" value="246"
                                class="input input-bordered focus:border-warning focus:outline-none w-full" />

                        </label>

                        <hr class="border-b border-2 max-sm:mx-12 mt-8 border-gray-500 border-dashed" />

                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Jumlah DPT</span>
                            </div>
                            <input name="dpt" type="text"
                                class="input input-bordered focus:border-warning focus:outline-none w-full" />

                        </label>

                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Suara Sah</span>
                            </div>
                            <input name="sah" type="text"
                                class="input input-bordered focus:border-warning focus:outline-none w-full" />

                        </label>

                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Suara Tidak Sah</span>
                            </div>
                            <input name="tidak_sah" type="text"
                                class="input input-bordered focus:border-warning focus:outline-none w-full"
                                value="{{ old('tidak_sah') }}" />
                            @if ($errors->has('tidak_sah'))
                                <span class="text-red-600 mt-3">{{ $errors->first('tidak_sah') }}</span>
                            @endif

                        </label>

                        <label class="form-control w-full pt-8">
                            <div class="label">
                                <span class="label-text">Upload Photo C1</span>
                            </div>

                            <input type="file" class="file-input file-input-bordered w-full" name="file"
                                id="file" />
                            @if ($errors->has('file'))
                                <span class="text-red-600 mt-3">{{ $errors->first('file') }}</span>
                            @endif
                        </label>

                        <div class="flex items-center mt-5">
                            <button class="ms-4 btn bg-warning hover:bg-warning" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>

                </div>


            </div>


        </section>


    </div>
@endsection

@extends('layouts.app')

@section('title')
    Input Data Pilgub
@endsection

@section('page-content')
    <div class="container lg:px-12 pt-12 lg:mt-8 max-lg:px-10 max-sm:px-5 mx-auto min-h-screen">

        <div class="flash-data" data-flash="{!! \Session::get('Success') !!}"></div>
        <p class="text-3xl font-bold underline underline-offset-8">@yield('title')</p>
        <section class="section lg:pt-8 py-8">

            <div class="relative overflow-x-auto shadow-lg border rounded-lg bg-white  border-gray-200  p-5">
                <div class="title-table grid ">
                    <div class="flex justify-between">
                        <div class="grid place-content-center">
                            <p class="text-lg font-bold">@yield('title')</p>
                            <p class="text-sm font-light text-gray-400">Silakan isi form Data Pilgub disini.
                            </p>
                        </div>




                    </div>

                    <hr class="mb-3 mt-2 border-gray-400" />


                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
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
                                <option value="1">Cipondoh</option>

                            </select>
                        </label>

                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Kelurahan</span>
                            </div>
                            <select class="select select-bordered focus:outline-none focus:border-warning" name="kelurahan"
                                id="kelurahan" required>
                                <option disabled selected value="">- Pilih Kelurahan -</option>
                                <option value="Ketapang">Ketapang</option>
                                <option value="Ketapang">Poris</option>

                            </select>
                        </label>

                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">TPS (Tempat Pemilihan Suara)</span>
                            </div>
                            <select class="select select-bordered focus:outline-none focus:border-warning" name="TPS"
                                id="TPS" required>
                                <option disabled selected value="">- Pilih TPS -</option>
                                @for ($i = 1; $i <= 25; $i++)
                                    <option value="TPS {{ $i }}"> TPS {{ $i }}</option>
                                @endfor


                            </select>
                        </label>

                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Total DPT</span>
                            </div>
                            <input name="kota" type="text" value="246"
                                class="input input-bordered focus:border-warning focus:outline-none w-full" />

                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Suarh Sah</span>
                            </div>
                            <input name="kota" type="text" value="246"
                                class="input input-bordered focus:border-warning focus:outline-none w-full" />

                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Suara Tidak Sah</span>
                            </div>
                            <input name="kota" type="text" value="246"
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
                                <span class="label-text">Gubernur Dan Wakil Gubernur Paslon 1</span>
                            </div>
                            <input name="kota" type="text" value="246"
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
                                <span class="label-text">Gubernur Dan Wakil Gubernur Paslon 2</span>
                            </div>
                            <input name="kota" type="text" value="246"
                                class="input input-bordered focus:border-warning focus:outline-none w-full" />

                        </label>
                        <label class="form-control w-full pt-8">
                            <div class="label">
                                <span class="label-text">Upload Photo C1</span>
                            </div>

                            <input type="file" class="file-input file-input-bordered w-full" />
                        </label>





                    </form>

                </div>


            </div>


        </section>


    </div>
@endsection

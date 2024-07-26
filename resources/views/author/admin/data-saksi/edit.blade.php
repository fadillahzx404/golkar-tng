@extends('layouts.app')

@section('title')
    Data Saksi {{ $datas->user }}
@endsection

@section('page-content')
    <div class="container lg:px-12  pt-12 lg:mt-8 max-lg:px-10 max-sm:px-5 mx-auto min-h-screen w-full overflow-auto">


        <p class="text-3xl font-bold underline underline-offset-8">Data Saksi {{ $datas->user }}</p>
        <section class="section lg:py-8">

            <div class="relative overflow-x-auto shadow-lg borde bg-white border-gray-200 sm:rounded-lg p-5">
                <div class="title-table grid">
                    <div class="flex justify-between">
                        <div class="grid w-full">
                            <div class="flex justify-between place-items-center">
                                <p class="text-lg font-bold">Data Saksi</p>
                                <div class="badge bg-orange-400 p-3">{{ Str::upper($datas->status) }}</div>
                            </div>
                            <p class="text-sm font-light text-gray-400">All Data Saksi on here, you change status.
                            </p>
                        </div>

                    </div>

                    <hr class="mb-3 mt-2 border-gray-400" />

                </div>

                <div class="flex justify-between border rounde-lg p-4   ">

                    <div class="title-kel text-center">
                        <p class="text-lg">Kecamatan</p>
                        <p class="font-bold text-xl">{{ $datas->kecRelation->nama }}</p>
                    </div>

                    <div class="title-kec text-center">
                        <p class="text-lg">Kelurahan</p>
                        <p class="font-bold text-xl">{{ $datas->tps }}</p>
                    </div>

                    <div class="title-tps text-center">
                        <p class="text-lg">TPS</p>
                        <p class="font-bold text-xl">{{ $datas->tps }}</p>
                    </div>
                    <div class="place-self-center">

                        <!-- Modal toggle -->
                        <a data-modal-target="default-modal-{{ $datas->Id }}"
                            data-modal-toggle="default-modal-{{ $datas->Id }}"
                            class=" text-black bg-warning hover:bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            Lihat Foto
                        </a>

                        <!-- Main modal -->
                        <div id="default-modal-{{ $datas->Id }}" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-5xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            C1 Photo
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="default-modal-{{ $datas->Id }}">
                                            X
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5 space-y-4">
                                        <img src="{{ asset("$datas->dokumen") }}" class=" border-2 rounded-xl"
                                            alt="">
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="grid space-y-4 p-3 pt-8 text-2xl">
                    <div class="grid grid-cols-4 ">
                        <div class="col-span-1">NIK</div>
                        <div class="col-span-3">: {{ $datas->user }}</div>
                    </div>
                    <div class="grid grid-cols-4 ">
                        <div class="col-span-1">Nama</div>
                        <div class="col-span-3">: {{ $datas->userRelation->name }}</div>
                    </div>
                    <div class="grid grid-cols-4 ">
                        <div class="col-span-1">Total DPT</div>
                        <div class="col-span-3">: {{ $datas->dpt }}</div>

                    </div>
                    <div class="grid grid-cols-4 ">
                        <div class="col-span-1">Suara Sah</div>
                        <div class="col-span-3">: {{ $datas->sah }}</div>
                    </div>
                </div>
                <div class="border text-2xl p-4">
                    <p class="pb-4 font-bold">Suara Masing-Masing Paslon</p>
                    <div class="grid space-y-4">
                        <div class="grid grid-cols-4 ">
                            <div class="col-span-1">H Sachrudin</div>
                            <div class="col-span-3">: {{ $datas->paslon1 }}</div>
                        </div>
                        <div class="grid grid-cols-4 ">
                            <div class="col-span-1">Paslon2</div>
                            <div class="col-span-3">: {{ $datas->paslon2 }}</div>
                        </div>
                    </div>

                </div>


                <hr class="my-4 border-gray-400" />
                <form class="grid" action="{{ route('data-saksi.update', $datas->Id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="user_verif" value="{{ Auth::user()->name }}" />
                    <div class="grid grid-cols-4 p-4">
                        <div class="col-span-1 place-content-center text-xl font-bold">Verfikasi</div>
                        <div class="col-span-3">
                            <div class="flex space-x-4">
                                <span class="place-content-center">:</span>
                                <div class="form-control">
                                    <label class="label cursor-pointer  space-x-4">
                                        <input type="radio" name="status" value="Not Verif"
                                            class="radio radio-error checked:bg-red-500" />
                                        <span class="label-text">Not Verif</span>
                                    </label>
                                </div>
                                <div class="form-control">
                                    <label class="label cursor-pointer  space-x-4">
                                        <input type="radio" name="status" value="Verif"
                                            class="radio radio-accent  checked:bg-green-500" checked="checked" />
                                        <span class="label-text">Verif</span>
                                    </label>
                                </div>
                            </div>



                        </div>

                    </div>
                    <div class="place-self-end">
                        <button type="submit" class="btn btn-sm btn-accent">Simpan</button>
                        <button type="submit" class="btn btn-sm btn-primary text-black">Kembali</button>
                    </div>
                </form>


            </div>


        </section>


    </div>
@endsection

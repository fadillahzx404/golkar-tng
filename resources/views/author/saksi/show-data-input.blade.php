@extends('layouts.app')

@section('title')
    Data Saksi {{ $data->userRelation->name }}
@endsection

@section('page-content')
    <div class="container lg:px-12  pt-12 lg:mt-8 max-lg:px-10 max-sm:px-5 mx-auto min-h-screen w-full overflow-auto">


        <div class="flex gap-4 pb-3">
            <p class="text-3xl font-bold underline underline-offset-8">Data Saksi {{ $data->userRelation->name }}</p>
            <a href="{{ route('dashboard') }}" class="p-3 btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <section class="section lg:py-8">

            <div class="relative overflow-x-auto shadow-lg border   bg-white border-gray-200 sm:rounded-lg p-5">
                <div class="title-table grid">
                    <div class="flex justify-between">
                        <div class="grid w-full">
                            <div class="flex justify-between place-items-center">
                                <p class="text-lg font-bold">Data Saksi</p>
                                @php
                                    $badge_color = '';
                                    switch ($data->status) {
                                        case 'VERIF':
                                            $badge_color = 'bg-accent';
                                            break;
                                        case 'NOT VERIF':
                                            $badge_color = 'bg-red-300';
                                            break;
                                        default:
                                            $badge_color = 'bg-orange-300';
                                            break;
                                    }
                                @endphp
                                <div class="badge {{ $badge_color }}  p-3">
                                    {{ Str::upper($data->status) }}</div>
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
                        <p class="font-bold text-xl">{{ $data->kecRelation->nama }}</p>
                    </div>

                    <div class="title-kec text-center">
                        <p class="text-lg">Kelurahan</p>
                        <p class="font-bold text-xl">{{ $data->tps }}</p>
                    </div>

                    <div class="title-tps text-center">
                        <p class="text-lg">TPS</p>
                        <p class="font-bold text-xl">{{ $data->tps }}</p>
                    </div>
                    <div class="place-self-center">
                        <!-- Modal toggle -->
                        <a data-modal-target="default-modal-{{ $data->Id }}"
                            data-modal-toggle="default-modal-{{ $data->Id }}"
                            class=" text-black bg-warning hover:bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            Lihat Foto
                        </a>

                        <!-- Main modal -->
                        <div id="default-modal-{{ $data->Id }}" tabindex="-1" aria-hidden="true"
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
                                            data-modal-hide="default-modal-{{ $data->Id }}">
                                            X
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5 space-y-4">
                                        <img src="{{ asset("$data->dokumen") }}" class=" border-2 rounded-xl"
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
                        <div class="col-span-3">: {{ $data->user }}</div>
                    </div>
                    <div class="grid grid-cols-4 ">
                        <div class="col-span-1">Nama</div>
                        <div class="col-span-3">: {{ $data->userRelation->name }}</div>
                    </div>
                    <div class="grid grid-cols-4 ">
                        <div class="col-span-1">Total DPT</div>
                        <div class="col-span-3">: {{ $data->dpt }}</div>

                    </div>
                    <div class="grid grid-cols-4 ">
                        <div class="col-span-1">Suara Sah</div>
                        <div class="col-span-3">: {{ $data->sah }}</div>
                    </div>
                </div>
                <div class="border text-2xl p-4">
                    <p class="pb-4 font-bold">Suara Masing-Masing Paslon</p>
                    <div class="grid space-y-4">
                        <div class="grid grid-cols-4 ">
                            <div class="col-span-1">H Sachrudin</div>
                            <div class="col-span-3">: {{ $data->paslon1 }}</div>
                        </div>
                        <div class="grid grid-cols-4 ">
                            <div class="col-span-1">Paslon2</div>
                            <div class="col-span-3">: {{ $data->paslon2 }}</div>
                        </div>
                    </div>

                </div>





            </div>


        </section>


    </div>
@endsection

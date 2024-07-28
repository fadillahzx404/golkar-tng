@extends('layouts.app')

@section('title')
    Data Saksi
@endsection

@section('page-content')
    <div class="container lg:px-12  pt-12 lg:mt-8 max-lg:px-10 max-sm:px-5 mx-auto min-h-screen w-full overflow-hidden">

        <div class="flash-data" data-flash="{!! \Session::get('Success') !!}"></div>
        <p class="text-3xl font-bold underline underline-offset-8">Data Saksi</p>
        <section class="section lg:pt-8">

            <div class="relative overflow-x-auto shadow-lg borde bg-white border-gray-200 sm:rounded-lg p-5">
                <div class="title-table grid">
                    <div class="flex justify-between">
                        <div class="grid place-content-center">
                            <p class="text-lg font-bold">Data Saksi</p>
                            <p class="text-sm font-light text-gray-400">All Data on here, you can add new Data,
                                edit or
                                delete.
                            </p>
                        </div>

                    </div>

                    <hr class="mb-3 mt-2 border-gray-400" />

                </div>
                <div class="pb-4  ">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="searchInput"
                            class="block p-2 pl-10 text-sm text-gray-900 border  border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-accent    focus:border-accent     "
                            placeholder="Search for items">
                    </div>
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 display responsive nowrap"
                    width="100%" id="serverside">
                    <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400 w-full">
                        <tr>
                            <th scope="col" class="py-4 w-4 " style="text-align: center">
                                No
                            </th>
                            <th scope="col" class="py-4 " style="text-align: center">
                                Nama Saksi
                            </th>
                            <th scope="col" class="py-4 " style="text-align: center">
                                TPS
                            </th>
                            <th scope="col" class="py-4 " style="text-align: center">
                                Kelurahan
                            </th>
                            <th scope="col" class="py-4 " style="text-align: center">
                                Kecamatan
                            </th>

                            {{-- <th scope="col" class="py-4 " style="text-align: center">
                                Photo
                            </th> --}}
                            <th scope="col" class="py-4 " style="text-align: center">
                                Status
                            </th>
                            <th scope="col" class="py-4 " style="text-align: end">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
<<<<<<< HEAD

                        @foreach ($datas as $data)
                            <tr>
                                <td class="w-4 py-4 text-center"> {{ $loop->iteration }}</td>
                                <th scope="row" class="py-4 text-center">{{ $data->user }}</th>
                                <th scope="row" class="py-4 text-center">TPS {{ $data->tps }}</th>
                                <td scope="row" class="py-4 text-center">{{ $data->kelRelation->nama }}</td>
                                <td scope="row" class="py-4 text-center">{{ $data->kecRelation->nama }}</td>
                                <td scope="row" class="py-4 text-center">



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


                                </td>
                                <td scope="row" class="py-4 text-center">
                                    <div class="badge bg-orange-400 p-3">{{ Str::upper($data->status) }}</div>
                                </td>
                                <td scope="row" class="p-4  text-end min-w-44">
                                    <a href="{{ route('data-saksi.edit', $data->Id) }}"
                                        class="bg-white hover:bg-primary shadow-lg py-2 px-4 rounded-md shadow-primary border-2 text-lg"
                                        > Detail<span></a>


                                </td>
                            </tr>
                        @endforeach
=======
>>>>>>> 8d6b14cd86880871aa796ec6de195c68386ba268
                    </tbody>
                </table>
            </div>


        </section>


    </div>
@endsection

@push('addon-script')
    <script>
        $(document).ready(function() {
            // loadData();
            var i = 1;
            var table = $('#serverside').DataTable({
                processing: true,
                pagination: true,
                responsive: true,
                serverSide: true,
                searching: true,
                ordering: false,
                ajax: {
                    url: "{{ route('data-saksi.index') }}"
                },
                columns: [{
                        "render": function() {
                            return i++;
                        }
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'tps',
                        name: 'tps'
                    },
                    {
                        data: 'kelurahan',
                        name: 'kelurahan'
                    },
                    {
                        data: 'kecamatan',
                        name: 'kecamatan'
                    },
                    // {
                    //     data: 'id',
                    //     name: 'id',
                    //     render: function(data, type, full, meta) {
                    //         var img = data[1]
                    //         var buttonModal =
                    //             '<a data-modal-target="default-modal-' + data[0] +
                    //             '" data-modal-toggle="default-modal-' +
                    //             data[0] +
                    //             '" class="text-black bg-warning hover:bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700" type="button">Lihat Foto</a>'
                    //         var modal =
                    //             '<div id="default-modal-' + data[0] +
                    //             '" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">' +
                    //             '<div class="relative p-4 w-full max-w-5xl max-h-full"><div class="relative bg-white rounded-lg shadow dark:bg-gray-700">' +
                    //             '<div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">' +
                    //             '<h3 class="text-xl font-semibold text-gray-900 dark:text-white">C1 Photo</h3><button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal-' +
                    //             data[0] +
                    //             '">X<span class="sr-only">Close modal</span></button></div><div class="p-4 md:p-5 space-y-4"><img src="' +
                    //             img +
                    //             '" class="border-2 rounded-xl" alt="C1"></div></div></div></div>';
                    //         return buttonModal + modal
                    //     }
                    // },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                ]
            })
        });

        // function loadData() {

        // }
    </script>
@endpush

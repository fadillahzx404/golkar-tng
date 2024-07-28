@extends('layouts.app')

@section('title')
    {{ 'Dashboard - Home' }}
@endsection

@section('page-content')
    <div class="container lg:px-12  pt-12 lg:mt-8 max-lg:px-10 max-sm:px-5 mx-auto min-h-screen w-full overflow-hidden">
        <p class="text-center text-black w-full pb-8 font-bold text-4xl animate-bounce">Welcome {{ Auth::user()->name }}</p>

        @if (Auth::user()->roles == 'ADMIN' || Auth::user()->roles == 'MASTER ADMIN')
            <section
                class="max-sm:hidden content-1 w-full flex max-sm:flex-col justify-evenly  max-sm:space-y-12 max-sm:items-center">
                <div class="relative ">

                    <div
                        class="bg-base-100 max-sm:place-items-center relative stat shadow-sm shadow-warning rounded-xl   z-30">

                        <div class="stat-title lg:pb-3 max-sm:text-2xl text-lg text-black">Total Data Belum Di Verifikasi
                            <span class="text-warning font-bold">(Kota Tangerang).</span>
                        </div>
                        <div class="flex space-x-2 ">
                            <div class="stat-value ">312</div>
                            <div class="lg:place-content-end">Data</div>
                        </div>

                    </div>

                </div>
                <div class="relative">

                    <div
                        class="bg-base-100 max-sm:place-items-center relative stat shadow-sm shadow-warning rounded-xl  z-30">

                        <div class="stat-title lg:pb-3 max-sm:text-2xl text-lg text-black">Total Data Sudah Di Verifikasi
                            <span class="text-warning font-bold">(Kota Tangerang).</span>
                        </div>
                        <div class="flex space-x-2 ">
                            <div class="stat-value ">312</div>
                            <div class="place-content-end">Data</div>
                        </div>

                    </div>

                </div>





            </section>
        @else
            <section class="table-reviews bg-white rounded-lg w-full mb-4 ">
                <div class="relative overflow-x-auto shadow-lg border-b border-gray-200 rounded-lg p-5">
                    <div class="pb-4 bg-white dark:bg-gray-900">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative mt-1">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text"
                                class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for items" id="searchInput">
                        </div>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 display responsive nowrap"
                        width="100%" id="datatable">
                        <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400 w-full">
                            <tr>
                                <th scope="col" data-priority="1" class="py-4 w-4 text-center">
                                    No
                                </th>
                                <th scope="col" data-priority="4" class="py-4 text-center">
                                    TPS
                                </th>
                                <th scope="col" data-priority="6" class="py-4 text-center">
                                    Kelurahan
                                </th>
                                <th scope="col" data-priority="7" class="py-4 text-center">
                                    Kecamatan
                                </th>
                                <th scope="col" data-priority="5" class="py-4 text-center ">
                                    Photo
                                </th>
                                <th scope="col" data-priority="3" class="py-4 text-center ">
                                    Status
                                </th>
                                <th scope="col" data-priority="2" class="py-4 text-end">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($userRekap as $uR)
                                <tr>
                                    <td class=" py-4 w-4 text-center "> {{ $loop->iteration }}</td>
                                    <td scope="row" class="py-4 text-center">TPS {{ $uR->tps }}</td>
                                    <td scope="row" class="py-4 text-center">{{ $uR->kelRelation->nama }}</td>
                                    <td scope="row" class="py-4 text-center">{{ $uR->kecRelation->nama }}</td>
                                    <td scope="row" class="py-4 text-center">
                                        <!-- Modal toggle -->
                                        <a data-modal-target="default-modal-{{ $uR->Id }}"
                                            data-modal-toggle="default-modal-{{ $uR->Id }}"
                                            class=" text-black bg-warning hover:bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            Lihat Foto
                                        </a>
                                        <!-- Main modal -->
                                        <div id="default-modal-{{ $uR->Id }}" tabindex="-1" aria-hidden="true"
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
                                                            data-modal-hide="default-modal-{{ $uR->Id }}">
                                                            X
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="p-4 md:p-5 space-y-4">
                                                        <img src="{{ asset("$uR->dokumen") }}" class=" border-2 rounded-xl"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td scope="row" class="py-4 text-center">
                                        <div
                                            class="badge @switch($uR->status)
                                            @case('Verif')
                                                bg-accent
                                                @break
                                                @case('Not Verif')
                                                   bg-red-300
                                                @break

                                            @default
                                                bg-orange-300
                                        @endswitch p-3 h-10">
                                            {{ Str::upper($uR->status) }}</div>
                                    </td>
                                    <td scope="row" class="p-4 text-end">
                                        <a href="{{ route('show-input-saksi', $uR->Id) }}"
                                            class="bg-white hover:bg-primary shadow-lg py-2 px-4 rounded-md shadow-primary border-2 text-xs">
                                            Detail</a>
                                        @if ($uR->status == 'Not Verif')
                                            <a href="{{ route('ubah-input-pilkada-saksi', $uR->Id) }}"
                                                class="bg-success hover:bg-success text-black shadow-lg py-2 px-4 rounded-md shadow-primary border-2 text-xs"><i
                                                    class="fa-solid fa-edit"></i>
                                                Update</a>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </section>
        @endif
    </div>
@endsection

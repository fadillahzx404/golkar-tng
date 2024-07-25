@extends('layouts.app')

@section('title')
    {{ 'Dashboard - Home' }}
@endsection

@section('page-content')
    <div class="container lg:px-12  pt-12 lg:mt-8 max-lg:px-10 max-sm:px-5 mx-auto min-h-screen w-full overflow-hidden">
        <p class="text-center text-black w-full pb-8 font-bold text-4xl animate-bounce">Welcome {{ Auth::user()->name }}</p>
        @if (AUth::user()->roles == 'ADMIN')
            <section
                class="max-sm:hidden content-1 w-full flex max-sm:flex-col justify-evenly  max-sm:space-y-12 max-sm:items-center">
                <div class="relative ">

                    <div
                        class="bg-base-100 max-sm:place-items-center relative stat shadow-sm shadow-warning rounded-xl w-72 max-sm:h-36 z-30">

                        <div class="stat-title lg:pb-3 max-sm:text-2xl text-lg text-black">Kelurahan</div>
                        <div class="flex space-x-2 ">
                            <div class="stat-value ">312</div>
                            <div class="lg:place-content-end">Data</div>
                        </div>

                    </div>

                </div>
                <div class="relative">

                    <div
                        class="bg-base-100 max-sm:place-items-center relative stat shadow-sm shadow-warning rounded-xl w-72 max-sm:h-36 z-30">

                        <div class="stat-title lg:pb-3 max-sm:text-2xl text-lg text-black">Kecamatan</div>
                        <div class="flex space-x-2 ">
                            <div class="stat-value ">312</div>
                            <div class="place-content-end">Data</div>
                        </div>

                    </div>

                </div>
                <div class="relative">

                    <div
                        class="bg-base-100 max-sm:place-items-center relative stat shadow-sm shadow-warning rounded-xl w-72 max-sm:h-36 z-30">

                        <div class="stat-title lg:pb-3 max-sm:text-2xl text-lg text-black">Kota/Kabupaten</div>
                        <div class="flex space-x-2 ">
                            <div class="stat-value ">312</div>
                            <div class="place-content-end">Data</div>
                        </div>

                    </div>

                </div>




            </section>

            <section class="section lg:pt-8">
                <div class="flash-data" data-flash="{!! \Session::get('Success') !!}"></div>

                <div class="relative overflow-x-auto shadow-lg borde bg-white border-gray-200 sm:rounded-lg p-5">
                    <div class="title-table grid">
                        <div class="flex justify-between">
                            <div class="grid place-content-center">
                                <p class="text-lg font-bold">Data</p>
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
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="searchInput"
                                class="block p-2 pl-10 text-sm text-gray-900 border  border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-accent    focus:border-accent     "
                                placeholder="Search for items">
                        </div>
                    </div>

                    <table
                        class="w-full text-sm text-left text-gray-500 dark:text-gray-400 datatable display responsive nowrap"
                        id="datatable" width="100%">
                        <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400 w-full">
                            <tr>
                                <th scope="col" class="py-4 w-4">
                                    No
                                </th>
                                <th scope="col" class="py-4">
                                    TPS
                                </th>
                                <th scope="col" class="py-4 ">
                                    Kelurahan
                                </th>
                                <th scope="col" class="py-4 ">
                                    Kecamatan
                                </th>
                                <th scope="col" class="py-4 ">
                                    Total
                                </th>
                                <th scope="col" class="py-4 ">
                                    Photo
                                </th>
                                <th scope="col" class="py-4 " style="text-align: end">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($userRekap as $uR)
                                <tr>
                                    <td class="w-4 py-4 text-center"> {{ $loop->iteration }}</td>
                                    <th scope="row" class="py-4 text-center">TPS {{ $uR->tps }}</th>
                                    <td scope="row" class="py-4 text-center">{{ $uR->kelRelation->nama }}</td>
                                    <td scope="row" class="py-4 text-center">{{ $uR->kecRelation->nama }}</td>
                                    <td scope="row" class="py-4 text-center">

                                        <!-- You can open the modal using ID.showModal() method -->
                                        <button class="btn btn-sm btn-warning" onclick="my_modal_3.showModal()">open
                                            modal</button>
                                        <dialog id="my_modal_3" class="modal">
                                            <div class="modal-box w-11/12 max-w-5xl">
                                                <form method="dialog">
                                                    <button
                                                        class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                                </form>
                                                <h3 class="text-lg font-bold">Photo C1</h3>
                                                <img src="{{ asset("$uR->dokumen") }}" class=" border-2 rounded-xl"
                                                    alt="">
                                            </div>
                                        </dialog>


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
                                        @endswitch p-3">
                                            {{ Str::upper($uR->status) }}</div>
                                    </td>
                                    <td scope="row" class="p-4  text-end min-w-44">


                                        <a href="{{ route('show-input-saksi', $uR->Id) }}"
                                            class="bg-white hover:bg-primary shadow-lg py-2 px-4 rounded-md shadow-primary border-2 text-lg">
                                            Detail<span></a>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        @else
            <section class="table-reviews bg-white rounded-lg w-full">
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
                    <table
                        class="w-full text-sm text-left text-gray-500 dark:text-gray-400 datatable display responsive nowrap"
                        width="100%" id="datatable">
                        <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400 w-full">
                            <tr>
                                <th scope="col" data-priority="1" class="py-4 w-4 text-center">
                                    No
                                </th>
                                <th scope="col" data-priority="4" data-priority="1" class="py-4 text-center">
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
                                    <th scope="row" class="py-4 text-center">TPS {{ $uR->tps }}</th>
                                    <td scope="row" class="py-4 text-center">{{ $uR->kelRelation->nama }}</td>
                                    <td scope="row" class="py-4 text-center">{{ $uR->kecRelation->nama }}</td>
                                    <td scope="row" class="py-4 text-center">

                                        <!-- You can open the modal using ID.showModal() method -->
                                        <button class="btn btn-sm btn-warning" onclick="my_modal_3.showModal()">open
                                            modal</button>
                                        <dialog id="my_modal_3" class="modal">
                                            <div class="modal-box w-11/12 max-w-5xl">
                                                <form method="dialog">
                                                    <button
                                                        class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                                </form>
                                                <h3 class="text-lg font-bold">Photo C1</h3>
                                                <img src="{{ asset("$uR->dokumen") }}" class=" border-2 rounded-xl"
                                                    alt="">
                                            </div>
                                        </dialog>


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
                                            class="bg-white hover:bg-primary shadow-lg py-2 px-4 rounded-md shadow-primary border-2 text-lg">
                                            Detail<span></a>


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

@push('addon-script')
    @push('addon-script')
        <script>
            $(document).ready(function() {

                const getChartOptions = () => {
                    return {
                        series: [70, 30],
                        colors: ["#B8AE52", "#16BDCA"],
                        chart: {
                            height: 420,
                            width: "100%",
                            type: "pie",

                        },
                        stroke: {
                            colors: ["white"],
                            lineCap: "",
                        },
                        plotOptions: {
                            pie: {
                                labels: {
                                    show: true,
                                },
                                size: "100%",
                                dataLabels: {
                                    offset: -25
                                }
                            },
                        },
                        labels: ["H Sachrudin", "Paslon 2"],
                        dataLabels: {
                            enabled: true,
                            style: {
                                fontFamily: "Inter, sans-serif",
                            },
                        },
                        legend: {
                            position: "bottom",
                            fontFamily: "Inter, sans-serif",
                        },
                        yaxis: {
                            labels: {
                                formatter: function(value) {
                                    return value + "%"
                                },
                            },
                        },
                        xaxis: {
                            labels: {
                                formatter: function(value) {
                                    return value + "%"
                                },
                            },
                            axisTicks: {
                                show: false,
                            },
                            axisBorder: {
                                show: false,
                            },
                        },
                    }
                }

                if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
                    const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
                    chart.render();
                }


                const getChartOptionsPilgub = () => {
                    return {
                        series: [80, 20],
                        colors: ["#B8AE52", "#16BDCA"],
                        chart: {
                            height: 420,
                            width: "100%",
                            type: "pie",

                        },
                        stroke: {
                            colors: ["white"],
                            lineCap: "",
                        },
                        plotOptions: {
                            pie: {
                                labels: {
                                    show: true,
                                },
                                size: "100%",
                                dataLabels: {
                                    offset: -25
                                }
                            },
                        },
                        labels: ["HJ Airin", "Paslon 2"],
                        dataLabels: {
                            enabled: true,
                            style: {
                                fontFamily: "Inter, sans-serif",
                            },
                        },
                        legend: {
                            position: "bottom",
                            fontFamily: "Inter, sans-serif",
                        },
                        yaxis: {
                            labels: {
                                formatter: function(value) {
                                    return value + "%"
                                },
                            },
                        },
                        xaxis: {
                            labels: {
                                formatter: function(value) {
                                    return value + "%"
                                },
                            },
                            axisTicks: {
                                show: false,
                            },
                            axisBorder: {
                                show: false,
                            },
                        },
                    }
                }

                if (document.getElementById("pie-chart-pilgub") && typeof ApexCharts !== 'undefined') {
                    const chart = new ApexCharts(document.getElementById("pie-chart-pilgub"), getChartOptionsPilgub());
                    chart.render();
                }





                const options = {
                    colors: ["#1A56DB", "#B8AE52"],
                    series: [{
                            name: "H Sachrudin",
                            color: "#B8AE52",
                            data: [{
                                    x: "Batu Ceper",
                                    y: 232
                                },
                                {
                                    x: "Benda",
                                    y: 113
                                },
                                {
                                    x: "Cibodas",
                                    y: 341
                                },
                                {
                                    x: "Ciledug",
                                    y: 224
                                },
                                {
                                    x: "Cipondoh",
                                    y: 522
                                },
                                {
                                    x: "Jatiuwung",
                                    y: 411
                                },
                                {
                                    x: "Karang Tengah",
                                    y: 243
                                },
                            ],
                        },
                        {
                            name: "Paslon Lain",
                            color: "#1A56DB",
                            data: [{
                                    x: "Batu Ceper",
                                    y: 231
                                },
                                {
                                    x: "Benda",
                                    y: 122
                                },
                                {
                                    x: "Cibodas",
                                    y: 63
                                },
                                {
                                    x: "Ciledug",
                                    y: 421
                                },
                                {
                                    x: "Cipondoh",
                                    y: 122
                                },
                                {
                                    x: "Jatiuwung",
                                    y: 323
                                },
                                {
                                    x: "Karang Tengah",
                                    y: 111
                                },
                            ],

                        },
                    ],
                    chart: {
                        type: "bar",
                        height: "320px",
                        fontFamily: "Inter, sans-serif",
                        toolbar: {
                            show: false,
                        },
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: "60%",
                            borderRadiusApplication: "end",
                            borderRadius: 8,
                        },
                    },
                    tooltip: {
                        shared: true,
                        intersect: false,
                        style: {
                            fontFamily: "Inter, sans-serif",
                        },
                    },
                    states: {
                        hover: {
                            filter: {
                                type: "darken",
                                value: 1,
                            },
                        },
                    },
                    stroke: {
                        show: true,
                        width: 0,
                        colors: ["transparent"],
                    },
                    grid: {
                        show: false,
                        strokeDashArray: 4,
                        padding: {
                            left: 2,
                            right: 2,
                            top: -14
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    legend: {
                        show: false,
                    },
                    xaxis: {
                        floating: false,
                        labels: {
                            show: true,
                            style: {
                                fontFamily: "Inter, sans-serif",
                                cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                            }
                        },
                        axisBorder: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        },
                    },
                    yaxis: {
                        show: false,
                    },
                    fill: {
                        opacity: 1,
                    },
                }

                if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
                    const chart = new ApexCharts(document.getElementById("column-chart"), options);
                    chart.render();
                }


                const optionsPilgub = {
                    colors: ["#1A56DB", "#B8AE52"],
                    series: [{
                            name: "HJ Airin",
                            color: "#B8AE52",
                            data: [{
                                    x: "Batu Ceper",
                                    y: 232
                                },
                                {
                                    x: "Benda",
                                    y: 113
                                },
                                {
                                    x: "Cibodas",
                                    y: 341
                                },
                                {
                                    x: "Ciledug",
                                    y: 224
                                },
                                {
                                    x: "Cipondoh",
                                    y: 522
                                },
                                {
                                    x: "Jatiuwung",
                                    y: 411
                                },
                                {
                                    x: "Karang Tengah",
                                    y: 243
                                },
                            ],
                        },
                        {
                            name: "Paslon Lain",
                            color: "#1A56DB",
                            data: [{
                                    x: "Batu Ceper",
                                    y: 231
                                },
                                {
                                    x: "Benda",
                                    y: 122
                                },
                                {
                                    x: "Cibodas",
                                    y: 63
                                },
                                {
                                    x: "Ciledug",
                                    y: 421
                                },
                                {
                                    x: "Cipondoh",
                                    y: 122
                                },
                                {
                                    x: "Jatiuwung",
                                    y: 323
                                },
                                {
                                    x: "Karang Tengah",
                                    y: 111
                                },
                            ],

                        },
                    ],
                    chart: {
                        type: "bar",
                        height: "320px",
                        fontFamily: "Inter, sans-serif",
                        toolbar: {
                            show: false,
                        },
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: "60%",
                            borderRadiusApplication: "end",
                            borderRadius: 8,
                        },
                    },
                    tooltip: {
                        shared: true,
                        intersect: false,
                        style: {
                            fontFamily: "Inter, sans-serif",
                        },
                    },
                    states: {
                        hover: {
                            filter: {
                                type: "darken",
                                value: 1,
                            },
                        },
                    },
                    stroke: {
                        show: true,
                        width: 0,
                        colors: ["transparent"],
                    },
                    grid: {
                        show: false,
                        strokeDashArray: 4,
                        padding: {
                            left: 2,
                            right: 2,
                            top: -14
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    legend: {
                        show: false,
                    },
                    xaxis: {
                        floating: false,
                        labels: {
                            show: true,
                            style: {
                                fontFamily: "Inter, sans-serif",
                                cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                            }
                        },
                        axisBorder: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        },
                    },
                    yaxis: {
                        show: false,
                    },
                    fill: {
                        opacity: 1,
                    },
                }
                if (document.getElementById("column-chart-pilgub") && typeof ApexCharts !== 'undefined') {
                    const chart = new ApexCharts(document.getElementById("column-chart-pilgub"), optionsPilgub);
                    chart.render();
                }

            })
        </script>
    @endpush

@endpush

@extends('layouts.app')
@section('title')
    Welcome
@endsection
@section('page-content')
    <div class="flex flex-col gap-12 min-h-screen max-sm:pt-20">

        <section
            class="main-content bg-primary lg:h-[1000px] lg:text-center max-sm:text-start max-sm:px-5 relative overflow-hidden">
            <div class="hero lg:pt-44 max-sm:pt-12 flex flex-col relative z-20">
                <p class="lg:text-5xl max-sm:text-6xl text-black font-extrabold">Real Count Golkar Web Apps</p>
                <p class="text-xl text-black font-medium max-sm:pt-4">Ikuti terus Real count yang berlangsung.</p>
            </div>
            <div class="flex max-sm:flex-col justify-center max-sm:space-y-24 lg:justify-evenly py-16 max-sm:pb-24">
                <div class="relative">
                    <div class="absolute top-5 lg:-right-5 max-sm:right-2 bg-warning w-80  h-full rounded-2xl">
                    </div>
                    <div class="card bg-base-100 shadow-md rounded-2xl lg:w-80 max-sm:w-11/12 text-start">
                        <figure>
                            <img src="{{ asset('images/paslon1.png') }}" class="w-80" alt="Shoes" />
                        </figure>
                        <div class="card-body">
                            <div class="flex justify-between">
                                <div class="flex flex-col">
                                    <p class="card-title font-extrabold text-2xl pb-3">H Sachudin</p>
                                    <p class="text-warning text-xl font-extrabold">10.000</p>
                                    <p class="font-semibold">suara</p>
                                </div>
                                <div class="radial-progress text-warning ring-[#6DA6DA] ring-8 ring-inset"
                                    style="--value:70; --size:7rem; --thickness: 10px;" role="progressbar">
                                    <span class="text-black font-bold text-2xl">70%</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute top-5 lg:-right-5 max-sm:right-2 bg-warning w-80  h-full rounded-2xl">
                    </div>
                    <div class="card bg-base-100 shadow-md rounded-2xl lg:w-80 max-sm:w-11/12 text-start">
                        <figure>
                            <img src="{{ asset('images/paslon2.png') }}" class="w-80" alt="Shoes" />
                        </figure>
                        <div class="card-body">
                            <div class="flex justify-between">
                                <div class="flex flex-col">
                                    <p class="card-title font-extrabold text-2xl pb-3">HJ Airin</p>
                                    <p class="text-warning text-xl font-extrabold">50.000</p>
                                    <p class="font-semibold">suara</p>
                                </div>
                                <div class="radial-progress text-warning ring-[#6DA6DA] ring-8 ring-inset"
                                    style="--value:30; --size:7rem; --thickness: 10px;" role="progressbar">
                                    <span class="text-black font-bold text-2xl">80%</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            {{-- Background Rotate --}}
            <div class="absolute -top-24 w-28 h-96 bg-warning rotate-45"></div>
            <div class="absolute -top-32 w-28 h-96 bg-[#ECDE65] rotate-45 lg:hidden"></div>
            <div class="absolute -bottom-48 right-12 w-28 h-[600px] bg-warning rounded-md rotate-45 max-sm:hidden"></div>
            {{-- Background Mobile --}}
            <div class="absolute -bottom-4 w-full h-12 left-0 bg-warning lg:hidden"></div>
            <div class="absolute bottom-4 w-full h-6 left-0 bg-[#ECDE65] lg:hidden"></div>
            {{-- RIGHT --}}
            <div class="absolute top-48 left-24 max-sm:hidden">
                <img src="{{ asset('images/star.png') }}" class="w-24" alt="">
            </div>
            <div class="absolute top-96 left-12 max-sm:hidden">
                <img src="{{ asset('images/star.png') }}" class="w-12" alt="">
            </div>
            <div class="absolute bottom-48 left-12 max-sm:hidden">
                <img src="{{ asset('images/star.png') }}" class="w-24" alt="">
            </div>

            {{-- LEFT --}}
            <div class="absolute top-48 right-24 max-sm:hidden">
                <img src="{{ asset('images/star.png') }}" class="w-12" alt="">
            </div>
            <div class="absolute top-96 right-24 max-sm:hidden">
                <img src="{{ asset('images/star.png') }}" class="w-24" alt="">
            </div>
        </section>

        <section
            class="content-2 w-full flex max-sm:flex-col justify-evenly px-8 lg:-mt-28 max-sm:space-y-12 max-sm:items-center">
            <div class="relative ">

                <div
                    class="bg-base-100 max-sm:place-items-center relative stat shadow-sm shadow-warning rounded-xl w-72 max-sm:h-36 z-30">

                    <div class="stat-title lg:pb-3 max-sm:text-2xl text-lg text-black">Kelurahaan</div>
                    <div class="flex space-x-2 ">
                        <div class="stat-value ">312</div>
                        <div class="lg:place-content-end">Data</div>
                    </div>

                </div>
                <div class="absolute -top-5 -left-5 w-24 h-24 bg-warning z-10 rounded-md"></div>
            </div>
            <div class="relative ">

                <div
                    class="bg-base-100 max-sm:place-items-center relative stat shadow-sm shadow-warning rounded-xl w-72 max-sm:h-36 z-30">

                    <div class="stat-title lg:pb-3 max-sm:text-2xl text-lg text-black">Kecamatan</div>
                    <div class="flex space-x-2 ">
                        <div class="stat-value ">312</div>
                        <div class="place-content-end">Data</div>
                    </div>

                </div>
                <div class="absolute -top-5 -left-5 w-24 h-24 bg-warning z-10 rounded-md"></div>
            </div>
            <div class="relative ">

                <div
                    class="bg-base-100 max-sm:place-items-center relative stat shadow-sm shadow-warning rounded-xl w-72 max-sm:h-36 z-30">

                    <div class="stat-title lg:pb-3 max-sm:text-2xl text-lg text-black">Kota/Kabupaten</div>
                    <div class="flex space-x-2 ">
                        <div class="stat-value ">312</div>
                        <div class="place-content-end">Data</div>
                    </div>

                </div>
                <div class="absolute -top-5 -left-5 w-24 h-24 bg-warning z-10 rounded-md"></div>
            </div>




        </section>

        <section class="content-3 flex flex-col bg-primary mt-16">
            <p class="p-4 -mt-8 w-48 bg-warning mx-8 rounded-md text-xl text-white font-bold">Pilkada</p>

            <div
                class="lg:flex max-sm:grid max-sm:px-4 max-sm:space-y-4 justify-between px-8 py-8 lg:space-x-8 max-sm:self-center">


                <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">

                    <div class="grid  w-full">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white me-1">Perbandingan Paslon
                            Lain</h5>
                        <div class="divider "></div>

                    </div>

                    <!-- Line Chart -->
                    <div class="py-6" id="pie-chart"></div>


                </div>



                <div class="min-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                    <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center me-3">
                                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                                    <path
                                        d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                                    <path
                                        d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">Kecamatan
                                </h5>
                                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Data Yang Masuk
                                </p>
                            </div>
                        </div>
                        <div>
                            <span
                                class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
                                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
                                </svg>
                                42.5%
                            </span>
                        </div>
                    </div>



                    <div id="column-chart"></div>

                </div>

            </div>
        </section>

        <section class="content-4 flex flex-col bg-primary mt-16">
            <p class="p-4 -mt-8 w-48 bg-warning mx-8 rounded-md text-xl text-white font-bold text-end self-end">Pilgub</p>

            <div
                class="lg:flex lg:flex-row-reverse lg:gap-8 max-sm:grid max-sm:px-4  max-sm:space-y-4 justify-between px-8 py-8 max-sm:self-center">


                <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">

                    <div class="grid  w-full">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white me-1">Perbandingan Paslon
                            Lain</h5>
                        <div class="divider "></div>

                    </div>

                    <!-- Line Chart -->
                    <div class="py-6" id="pie-chart-pilgub"></div>


                </div>



                <div class="min-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                    <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center me-3">
                                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                                    <path
                                        d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                                    <path
                                        d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">Kecamatan
                                </h5>
                                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Data Yang Masuk
                                </p>
                            </div>
                        </div>
                        <div>
                            <span
                                class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
                                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
                                </svg>
                                42.5%
                            </span>
                        </div>
                    </div>



                    <div id="column-chart-pilgub"></div>

                </div>

            </div>
        </section>





    </div>
@endsection

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

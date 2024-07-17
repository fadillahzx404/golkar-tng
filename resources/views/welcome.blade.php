@extends('layouts.app')
@section('title')
    Welcome
@endsection
@section('page-content')
    <div class="flex flex-col gap-12 min-h-screen">

        <section
            class="main-content bg-primary lg:h-[1000px] lg:text-center max-sm:text-start max-sm:px-5 relative overflow-hidden">
            <div class="hero lg:pt-44 max-sm:pt-12 flex flex-col relative z-20">
                <p class="text-5xl text-black font-extrabold">Real Count Golkar Web Apps</p>
                <p class="text-xl text-black font-medium">Ikuti terus Real count yang berlangsung.</p>
            </div>
            <div class="flex max-sm:flex-col justify-evenly py-16">
                <div class="relative">
                    <div class="absolute top-5 -right-5 bg-warning w-80 h-full rounded-2xl">
                    </div>
                    <div class="card bg-base-100 shadow-md rounded-2xl w-80 text-start">
                        <figure>
                            <img src="{{ asset('images/paslon1.png') }}" class="h-[300px]" alt="Shoes" />
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
                    <div class="absolute top-5 -right-5 bg-warning w-80 h-full rounded-2xl">
                    </div>
                    <div class="card bg-base-100 shadow-md rounded-2xl w-80 text-start">
                        <figure>
                            <img src="{{ asset('images/paslon2.png') }}" class="h-[300px]" alt="Shoes" />
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
                                    <span class="text-black font-bold text-2xl">30%</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="absolute -top-24 w-28 h-96 bg-warning rotate-45"></div>
            <div class="absolute -bottom-48 right-12 w-28 h-[600px] bg-warning rounded-md rotate-45 max-sm:hidden"></div>
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

        <section class="content-2 w-full flex max-sm:flex-col justify-evenly px-8 -mt-28">
            <div class="relative">

                <div class="bg-base-100 relative stat shadow-sm shadow-warning rounded-xl w-72 z-30">

                    <div class="stat-title pb-3 text-lg text-black">Kelurahaan</div>
                    <div class="flex space-x-2">
                        <div class="stat-value">312</div>
                        <div class="place-content-end">Data</div>
                    </div>

                </div>
                <div class="absolute -top-5 -left-5 w-24 h-24 bg-warning z-10 rounded-md"></div>
            </div>
            <div class="relative">

                <div class="bg-base-100 relative stat shadow-sm shadow-warning rounded-xl w-72 z-30">

                    <div class="stat-title pb-3 text-lg text-black">Kecamataan</div>
                    <div class="flex space-x-2">
                        <div class="stat-value">3,555</div>
                        <div class="place-content-end">Data</div>
                    </div>

                </div>
                <div class="absolute -top-5 -left-5 w-24 h-24 bg-warning z-10 rounded-md"></div>
            </div>
            <div class="relative">

                <div class="bg-base-100 relative stat shadow-sm shadow-warning rounded-xl w-72 z-30">

                    <div class="stat-title pb-3 text-lg text-black">Kota/Kabupaten</div>
                    <div class="flex space-x-2">
                        <div class="stat-value">10,345</div>
                        <div class="place-content-end">Data</div>
                    </div>

                </div>
                <div class="absolute -top-5 -left-5 w-24 h-24 bg-warning z-10 rounded-md"></div>
            </div>



        </section>

        <section class="content-3 flex flex-col bg-primary mt-16">
            <p class="p-4 -mt-8 w-48 bg-warning mx-8 rounded-md text-xl text-white font-bold">Pilkada</p>

            <div class="flex max-sm:flex-col justify-between px-8 py-8 space-x-8">
                <div class="card bg-base-100 shadow-md rounded-2xl w-full text-start">

                    <div class="card-body">
                        <div class="flex justify-between">
                            <div class="flex flex-col">
                                <p class="card-title font-extrabold text-2xl pb-3">HJ Airin</p>
                                <p class="text-warning text-xl font-extrabold">50.000</p>
                                <p class="font-semibold">suara</p>
                            </div>
                            <div class="radial-progress text-warning ring-[#6DA6DA] ring-8 ring-inset"
                                style="--value:30; --size:7rem; --thickness: 10px;" role="progressbar">
                                <span class="text-black font-bold text-2xl">30%</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card bg-base-100 shadow-md rounded-2xl w-full text-start">

                    <div class="card-body">
                        <div class="flex justify-between">
                            <div class="flex flex-col">
                                <p class="card-title font-extrabold text-2xl pb-3">HJ Airin</p>
                                <p class="text-warning text-xl font-extrabold">50.000</p>
                                <p class="font-semibold">suara</p>
                            </div>
                            <div class="radial-progress text-warning ring-[#6DA6DA] ring-8 ring-inset"
                                style="--value:30; --size:7rem; --thickness: 10px;" role="progressbar">
                                <span class="text-black font-bold text-2xl">30%</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="content-4 flex flex-col bg-primary mt-16">
            <p class="p-4 -mt-8 w-48 bg-warning mx-8 rounded-md text-xl text-end self-end text-white font-bold">Pilgub</p>

            <div class="flex max-sm:flex-col justify-between px-8 py-8 space-x-8">
                <div class="card bg-base-100 shadow-md rounded-2xl w-full text-start">

                    <div class="card-body">
                        <div class="flex justify-between">
                            <div class="flex flex-col">
                                <p class="card-title font-extrabold text-2xl pb-3">HJ Airin</p>
                                <p class="text-warning text-xl font-extrabold">50.000</p>
                                <p class="font-semibold">suara</p>
                            </div>
                            <div class="radial-progress text-warning ring-[#6DA6DA] ring-8 ring-inset"
                                style="--value:30; --size:7rem; --thickness: 10px;" role="progressbar">
                                <span class="text-black font-bold text-2xl">30%</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card bg-base-100 shadow-md rounded-2xl w-full text-start">

                    <div class="card-body">
                        <div class="flex justify-between">
                            <div class="flex flex-col">
                                <p class="card-title font-extrabold text-2xl pb-3">HJ Airin</p>
                                <p class="text-warning text-xl font-extrabold">50.000</p>
                                <p class="font-semibold">suara</p>
                            </div>
                            <div class="radial-progress text-warning ring-[#6DA6DA] ring-8 ring-inset"
                                style="--value:30; --size:7rem; --thickness: 10px;" role="progressbar">
                                <span class="text-black font-bold text-2xl">30%</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection

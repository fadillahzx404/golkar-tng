@extends('layouts.app')

@section('title')
    Report
@endsection

@section('page-content')
    <div class="container lg:px-12  pt-12 lg:mt-8 max-lg:px-10 max-sm:px-5 mx-auto min-h-screen w-full overflow-auto">

        <div class="flash-data" data-flash="{!! \Session::get('Success') !!}"></div>
        <p class="text-3xl font-bold underline underline-offset-8">@yield('title')</p>
        <p class="text-xl text-gray-600 mt-4">Click export to export data to excel</p>

        <form action="{{ route('export.rekap') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Pilih Kecamatan</span>
                </div>
                <select class="select select-bordered font-bold text-black focus:outline-none focus:border-warning"
                    name="kecamatan" id="kecamatan">
                    <option value="">All</option>
                    @foreach ($kecamatan as $kc)
                        <option value="{{ $kc->kode }}">{{ $kc->nama }}</option>
                    @endforeach
                </select>
            </label>

            <div class="flex mt-3">
                <button class="btn btn-accent mt-4" type="submit">
                    Export To Excel
                </button>
            </div>
        </form>

        {{-- <a href="{{ route('export.rekap') }}" class="btn btn-accent mt-4"> Export To Excel </a> --}}


    </div>
@endsection

@extends('layouts.app')

@section('title')
    Report
@endsection

@section('page-content')
    <div class="container lg:px-12  pt-12 lg:mt-8 max-lg:px-10 max-sm:px-5 mx-auto min-h-screen w-full overflow-auto">

        <div class="flash-data" data-flash="{!! \Session::get('Success') !!}"></div>
        <p class="text-3xl font-bold underline underline-offset-8">@yield('title')</p>
        <p class="text-xl text-gray-600 mt-4">Click export to export data to excel</p>

        <a href="" class="btn btn-accent mt-4"> Export To Excel </a>


    </div>
@endsection

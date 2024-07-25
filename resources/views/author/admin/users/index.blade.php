@extends('layouts.app')

@section('title')
    Users Management
@endsection

@section('page-content')
    <div class="container lg:px-12  pt-12 lg:mt-8 max-lg:px-10 max-sm:px-5 mx-auto min-h-screen w-full overflow-hidden">


        <p class="text-3xl font-bold underline underline-offset-8">Users Management</p>
        <section class="section lg:pt-8">

            <div class="relative overflow-x-auto shadow-lg borde bg-white border-gray-200 sm:rounded-lg p-5">
                <div class="title-table grid">
                    <div class="flex justify-between">
                        <div class="grid place-content-center">
                            <p class="text-lg font-bold">Users Management ADMIN</p>
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
                    width="100%" id="datatable">
                    <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400 w-full">
                        <tr>
                            <th scope="col" class="py-4 w-4 " style="text-align: center">
                                No
                            </th>
                            <th scope="col" class="py-4 " style="text-align: center">
                                NIK
                            </th>
                            <th scope="col" class="py-4 " style="text-align: center">
                                Nama
                            </th>
                            <th scope="col" class="py-4 " style="text-align: center">
                                Email
                            </th>
                            <th scope="col" class="py-4 " style="text-align: center">
                                Phone Number
                            </th>
                            <th scope="col" class="py-4 " style="text-align: center">
                                Roles
                            </th>
                            <th scope="col" class="py-4 " style="text-align: end">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($userAdmin as $uA)
                            <tr>
                                <td class="w-4 py-4 text-center"> {{ $loop->iteration }}</td>
                                <th scope="row" class="py-4 text-center">{{ $uA->nik }}</th>
                                <th scope="row" class="py-4 text-center">{{ $uA->name }}</th>
                                <td scope="row" class="py-4 text-center">{{ $uA->email }}</td>
                                <td scope="row" class="py-4 text-center">{{ $uA->phone_number }}</td>
                                <td scope="row" class="py-4 text-center">{{ $uA->roles }}</td>

                                <td scope="row" class="p-4  text-end min-w-44">
                                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                        class="text-black border shadow-md bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">Action <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>


                                    <!-- Dropdown menu -->
                                    <div id="dropdown"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="dropdownDefaultButton">
                                            <li>

                                                <a href="{{ route('users.edit', $uA->id) }}"
                                                    class="block px-4 py-2 hover:bg-gray-300 dark:hover:bg-gray-600 text-center dark:hover:text-white">Edit</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white text-center">Delete</a>
                                            </li>

                                        </ul>
                                    </div>



                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </section>




    </div>
@endsection

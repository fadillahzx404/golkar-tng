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
                <div class="flex justify-between">

                    <div class="pb-4">
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


                    <form action="{{ route('import.users') }}" class="flex space-x-3 p-2" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="file-input file-input-bordered file-input-sm  w-full max-w-sm"
                            name="file" />
                        <button type="submit" class="btn btn-sm btn-accent ">Import Users</button>
                    </form>

                </div>


                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 display responsive nowrap"
                    width="100%" id="users-table">
                    <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400 w-full">
                        <tr>

                            <th scope="col" class="py-4 w-4" style="text-align: center">
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
                                Nomor Telepon
                            </th>
                            <th scope="col" class="py-4 " style="text-align: center">
                                Kecamatan
                            </th>
                            <th scope="col" class="py-4 " style="text-align: center">
                                Kelurahan
                            </th>
                            <th scope="col" class="py-4 " style="text-align: center">
                                TPS
                            </th>
                            <th scope="col" class="py-4 " style="text-align: center">
                                Roles
                            </th>
                            <th scope="col" class="py-4 " style="text-align: end">
                                Action
                            </th>
                        </tr>
                    </thead>

                </table>
            </div>


        </section>




    </div>



    <!-- Modal toggle -->
    <button data-modal-target="default-modal" data-modal-toggle="default-modal"
        class="hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">
        Toggle modal
    </button>

    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Terms of Service
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">



                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="default-modal" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                        accept</button>
                    <button data-modal-hide="default-modal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        $(function() {

            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('users.data') }}', // memanggil route yang menampilkan data json
                columns: [ // mengambil & menampilkan kolom sesuai tabel database

                    {
                        data: 'id',
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'nik',

                    },
                    {
                        data: 'name',

                    },
                    {
                        data: 'email',

                    },
                    {
                        data: 'phone_number',

                    },
                    {
                        data: 'kec_relation.nama',

                    },
                    {
                        data: 'kel_relation.nama',

                    },
                    {
                        data: 'tps',

                    },
                    {
                        data: 'roles',

                    },
                    {
                        data: 'id',
                        render: function(data, type, meta) {
                            var id = meta['id']
                            var editUrl = 'users/' + id + '/edit'
                            var deleteUrl = 'users/' + id
                            var editHtml =
                                '<a class="bg-yellow-200 hover:bg-yellow-500 p-3 rounded-md hover:text-white" href="' +
                                editUrl + '"  ><i class="fa-solid fa-edit"></i></a>'
                            var deleteHtml = '<form action="' + deleteUrl +
                                '" class="bg-red-200 hover:bg-red-500 p-3 rounded-md hover:text-white " method="POST"> @csrf @method('DELETE') <button type="submit"><i class="fa-solid fa-trash"></i> </button> </form> '

                            return '<div class="flex space-x-2"> ' + editHtml + deleteHtml +
                                ' </div>'
                        }

                    }
                ]
            });
        });
    </script>
@endpush

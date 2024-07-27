@extends('layouts.app')

@section('title')
    Edit Users
@endsection

@section('page-content')
    <div class="container lg:px-12  pt-12 lg:mt-8 max-lg:px-10 max-sm:px-5 mx-auto min-h-screen w-full overflow-auto">


        <p class="text-3xl font-bold underline underline-offset-8">Edit user</p>
        <section class="section lg:py-8">

            <div class="relative overflow-x-auto shadow-lg borde bg-white border-gray-200 sm:rounded-lg p-5">
                <div class="title-table grid">
                    <div class="flex justify-between">
                        <div class="grid w-full">
                            <p class="text-lg font-bold">Data User {{ $data->nama }}</p>

                            <p class="text-sm font-light text-gray-400">All Data Saksi on here, you change status.
                            </p>
                        </div>

                    </div>

                    <hr class="mb-3 mt-2 border-gray-400" />

                </div>

                <form action="{{ route('users.update', $data->id) }}" method="POST" enctype="multipart/form-data" class="grid p-3 space-y-1 pt-2 text-2xl">
                    @csrf
                    @method('PUT')
                    <label class="form-control w-full ">
                        <div class="label">
                          <span class="label-text">Roles</span>
                        </div>
                        <select class="select select-bordered" name="roles">
                            @php
                                $values = ['Saksi Pilgub', 'Saksi Pilkada', 'Admin', 'Master Admin']
                            @endphp

                          @foreach ($values as  $val)
                          <option value="{{ Str::upper($val) }}" @if ($data->roles == Str::upper($val))
                              selected
                          @endif>{{ $val }}</option>
                          @endforeach
                        </select>

                      </label>

                    <label class="form-control w-full ">
                        <div class="label">
                          <span class="label-text">NIK</span>
                        </div>
                        <input type="text" name="nik" value="{{ $data->nik }}" class="input input-bordered w-full " />
                    </label>

                    <label class="form-control w-full ">
                        <div class="label">
                          <span class="label-text">Nama</span>
                        </div>
                        <input type="text" name="name" value="{{ $data->name }}" class="input input-bordered w-full " />
                    </label>

                    <label class="form-control w-full ">
                        <div class="label">
                          <span class="label-text">Email</span>
                        </div>
                        <input type="text" name="email" value="{{ $data->email }}" class="input input-bordered w-full " />
                    </label>

                    <label class="form-control w-full ">
                        <div class="label">
                          <span class="label-text">Nomor Telepon</span>
                        </div>
                        <input type="text" name="phone_number" value="{{ $data->phone_number }}" class="input input-bordered w-full " />
                    </label>

                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Kecamatan</span>
                        </div>
                        <select class="select select-bordered focus:outline-none focus:border-warning" name="kecamatan"
                            id="kecamatan" required>
                            <option disabled selected value=""> - Pilih Kecamatan - </option>
                            @foreach ($kecamatan as $kc)
                                <option value="{{ $kc->nama }}" @if ($data->kecamatan == $kc->nama)
                                    selected
                                @endif>{{ $kc->nama }}</option>
                            @endforeach
                        </select>
                    </label>

                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Kelurahan</span>
                        </div>
                        <select class="select select-bordered focus:outline-none focus:border-warning" name="kelurahan"
                            id="kelurahan" required>
                            <option disabled selected value="">- Pilih Kelurahan -</option>
                        </select>
                    </label>

                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">TPS (Tempat Pemilihan Suara)</span>
                        </div>
                        <select class="select select-bordered focus:outline-none focus:border-warning" name="TPS" id="TPS"
                            required>
                            <option disabled selected value=""> - Pilih TPS - </option>
                        </select>
                    </label>


                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Password</span>
                        </div>

                        <input id="password" name="password" type="password"
                             value="{{ $data->password }}"
                            class="input input-bordered focus:border-warning focus:outline-none w-full" required
                            autocomplete="password" />
                            <div class="label">
                                <span class="label-text text-red-500">*Password jagan di ubah jika tidak ingin di ubah (Password di Encrypt) !!</span>
                            </div>
                    </label>

                    <div class="flex space-x-2 justify-end pt-4">
                        <a href="{{ route('users.index') }}" class="btn btn-sm  text-black">Kembali</a>
                        <button type="submit" class="btn btn-sm btn-accent">Simpan</button>
                    </div>

                </form>


            </div>


        </section>


    </div>
@endsection

@push('addon-script')



<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('select[name="kecamatan"]').change(function() {
            onChangeSelect("{{ route('districts') }}", $(this).val(), 'kelurahan')
            $('#TPS option').remove();
            $('#TPS').append('<option> - Pilih TPS - </option>');
        })
        $('select[name="kelurahan"]').on('change', function() {
            $('#TPS').append('<option> - Pilih TPS - </option>');
            $('#TPS option').remove();
            let jml_tps = $('select[name="kelurahan"] :selected').attr('class');
            $('#TPS').append('<option> - Pilih TPS - </option>');
            for (let index = 1; index < jml_tps; index++) {
                $('#TPS').append('<option id="opt_tps" value="' + index + '"> TPS ' + index +
                    '</option>');
            }

        })

    })
</script>

<script>
    function onChangeSelect(url, id, name) {
        // send ajax request to get the cities of the selected province and append to the select tag
        $.ajax({
            url: url,
            type: 'GET',
            data: {
                id: id
            },
            success: function(data) {
                $('#' + name).empty();
                $('#' + name).append('<option> - Pilih Kelurahan - </option>');
                $.each(data, function(key, value) {

                    $('#' + name).append('<option id="opt_kel" class="' + value.jml_tps + '" value="' + value
                        .kode + '">' + value.nama +
                        '</option>');

                });

            }
        });

    }
</script>

@endpush

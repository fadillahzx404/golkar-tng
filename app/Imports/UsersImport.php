<?php

namespace App\Imports;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Str;

class UsersImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    use Importable;

    public function model(array $row)
    {

        $pass = Str::lower($row['kelurahan']) . substr($row['nik'], 4);
        $kel = Kelurahan::where('nama', Str::upper($row['kelurahan']))->get();
        $kec = Kecamatan::where('nama', Str::upper($row['kecamatan']))->get();

        return new User([
            'nik' => $row['nik'],
            'name' => $row['nama'],
            'phone_number' => $row['nomor'],
            'kota' => 'KOTA TANGERANG',
            'kelurahan' => $kel[0]->kode,
            'kecamatan' => $kec[0]->kode,
            'password' => Hash::make($pass),
            'roles' => Str::upper($row['roles']),
            'tps' => $row['tps'],
        ]);
    }

    public function rules(): array
    {
        return [
            'nik' => 'unique:users,nik'
        ];
    }
}

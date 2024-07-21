<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {

        Validator::make($input, [
            'nik' => ['required', 'int',  'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'kelurahan' => ['required', 'int'],
            'phone_number' => ['required', 'int'],
            'kelurahan' => ['required', 'string'],
            'kecamatan' => ['required', 'string'],

        ])->validate();

        return User::create([
            'nik' => $input['nik'],
            'name' => $input['name'],
            'phone_number' => $input['phone_number'],
            'kota' => $input['kota'],
            'kecamatan' => $input['kecamatan'],
            'kelurahan' => $input['kelurahan'],
            'password' => Hash::make($input['password']),
            'roles' => $input['roles']
        ]);
    }
}

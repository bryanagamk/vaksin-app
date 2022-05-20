<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "test";
        $user->nik = "123456789123456";
        $user->nip = "123123123123123";
        $user->gender = "Laki-laki";
        $user->birth_date = "2022-05-19";
        $user->blood_type = "B";
        $user->handphone = "087787081470";
        $user->status = "Aktif";
        $user->email = "test@gmail.com";
        $user->password = Hash::make('123456789');
        $user->save();
        $user->attachRole('user');

        $user = new User;
        $user->name = "test1";
        $user->nik = "123456789123456";
        $user->nip = "123123123123123";
        $user->gender = "Laki-laki";
        $user->birth_date = "2022-05-19";
        $user->blood_type = "B";
        $user->handphone = "087787081470";
        $user->status = "Aktif";
        $user->email = "test1@gmail.com";
        $user->password = Hash::make('123456789');
        $user->save();
        $user->attachRole('user');

        $user = new User;
        $user->name = "test2";
        $user->nik = "123456789123456";
        $user->nip = "123123123123123";
        $user->gender = "Laki-laki";
        $user->birth_date = "2022-05-19";
        $user->blood_type = "B";
        $user->handphone = "087787081470";
        $user->status = "Aktif";
        $user->email = "test2@gmail.com";
        $user->password = Hash::make('123456789');
        $user->save();
        $user->attachRole('user');

        $user = new User;
        $user->name = "test3";
        $user->nik = "123456789123456";
        $user->nip = "123123123123123";
        $user->gender = "Laki-laki";
        $user->birth_date = "2022-05-19";
        $user->blood_type = "B";
        $user->handphone = "087787081470";
        $user->status = "Aktif";
        $user->email = "test3@gmail.com";
        $user->password = Hash::make('123456789');
        $user->save();
        $user->attachRole('user');

        $user = new User;
        $user->name = "test4";
        $user->nik = "123456789123456";
        $user->nip = "123123123123123";
        $user->gender = "Laki-laki";
        $user->birth_date = "2022-05-19";
        $user->blood_type = "B";
        $user->handphone = "087787081470";
        $user->status = "Aktif";
        $user->email = "test4@gmail.com";
        $user->password = Hash::make('123456789');
        $user->save();
        $user->attachRole('user');
    }
}

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
        $admin = new User;
        $admin->name = "test";
        $admin->nik = "123456789";
        $admin->nip = "123123";
        $admin->gender = "Laki-laki";
        $admin->birth_date = "2022-05-19";
        $admin->blood_type = "B";
        $admin->handphone = "087787081470";
        $admin->status = "Aktif";
        $admin->email = "test@gmail.com";
        $admin->password = Hash::make('123456789');
        $admin->save();
        $admin->attachRole('user');
    }
}

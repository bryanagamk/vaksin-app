<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = "admin";
        $admin->nik = "";
        $admin->gender = "";
        $admin->birth_date = "";
        $admin->nip = "";
        $admin->blood_type = "";
        $admin->handphone = "";
        $admin->status = "";
        $admin->email = "admin@gmail.com";
        $admin->password = Hash::make('123456789');
        $admin->save();
        $admin->attachRole('admin');
    }
}

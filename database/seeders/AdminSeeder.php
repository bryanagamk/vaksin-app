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
        $admin->email = "admin@gmail.com";
        $admin->password = Hash::make('123456789');
        $admin->save();
        $admin->attachRole('admin');
    }
}

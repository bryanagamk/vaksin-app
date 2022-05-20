<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Vaccinator;
use Illuminate\Support\Facades\Hash;

class VaccinatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vaccinator = new Vaccinator();
        $vaccinator->name = "RSU Haji";
        $vaccinator->save();

        $vaccinator = new Vaccinator();
        $vaccinator->name = "RSU Airlangga";
        $vaccinator->save();

        $vaccinator = new Vaccinator();
        $vaccinator->name = "Puskesmas Mulyorejo";
        $vaccinator->save();
    }
}

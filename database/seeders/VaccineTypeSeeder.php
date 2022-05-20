<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VaccineType;

class VaccineTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vaccineType = new VaccineType();
        $vaccineType->name = "Sinovac";
        $vaccineType->save();

        $vaccineType = new VaccineType();
        $vaccineType->name = "Pfizer";
        $vaccineType->save();

        $vaccineType = new VaccineType();
        $vaccineType->name = "Moderna";
        $vaccineType->save();

        $vaccineType = new VaccineType();
        $vaccineType->name = "AstraZeneca";
        $vaccineType->save();
    }
}

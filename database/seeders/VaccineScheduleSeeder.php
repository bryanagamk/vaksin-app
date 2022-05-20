<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VaccineSchedule;

class VaccineScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedule = new VaccineSchedule();
        $schedule->vaccinator_id = "1";
        $schedule->vaccine_type_id = "2";
        $schedule->vaccine_regisdate_start = "2022-05-12";
        $schedule->vaccine_regisdate_end = "2022-05-22";
        $schedule->vaccine_date = "2022-05-23";
        $schedule->vaccine_session_start = "06:00:00";
        $schedule->vaccine_session_end = "17:00:00";
        $schedule->location = "Surabaya";
        $schedule->quota = "3";
        $schedule->remaining_quota = "3";
        $schedule->save();
    }
}

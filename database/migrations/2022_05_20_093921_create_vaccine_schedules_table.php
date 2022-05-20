<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccineSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine_schedules', function (Blueprint $table) {
            $table->id();
            $table->integer('vaccinator_id')->length(11);
            $table->integer('vaccine_type_id')->length(11);
            $table->date('vaccine_regisdate_start');
            $table->date('vaccine_regisdate_end');
            $table->string('vaccine_date');
            $table->string('vaccine_session_start');
            $table->string('vaccine_session_end');
            $table->string('location');
            $table->integer('quota');
            $table->integer('remaining_quota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccine_schedules');
    }
}

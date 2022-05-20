<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccineMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine_members', function (Blueprint $table) {
            $table->id();
            $table->integer('vaccine_schedule_id');
            $table->integer('user_id');
            $table->integer('attendance')->default(0);
            $table->integer('number_vaccine')->default(0);
            $table->date('vaccine_at')->nullable();
            $table->date('next_vaccine_at')->nullable();
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
        Schema::dropIfExists('vaccine_members');
    }
}

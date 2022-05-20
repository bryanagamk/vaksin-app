<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKipisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kipis', function (Blueprint $table) {
            $table->id();
            $table->integer('vaccine_member_id');
            $table->date('kipi_date');
            $table->text('symptomps');
            $table->text('medical_treatment')->nullable();
            $table->string('call_doctor')->default('Belum');
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
        Schema::dropIfExists('kipis');
    }
}

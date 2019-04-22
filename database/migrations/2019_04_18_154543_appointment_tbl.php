<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AppointmentTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Appointment_tbl', function (Blueprint $table) {
            $table->string('customerName', 45)->nullable();
            $table->string('AppointmentDate', 45)->nullable();
            $table->string('AppointmentTime', 45)->nullable();
            $table->string('ServiceId', 45)->nullable();
		
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
        Schema::dropIfExists('Appointment_tbl');
    }
}

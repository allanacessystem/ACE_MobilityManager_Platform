<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OnRouteDetailsTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OnRouteDetails_tbl', function (Blueprint $table) {
            $table->string('driverName', 45)->nullable();
            $table->string('sourcePoint', 45)->nullable();
            $table->string('Destination', 45)->nullable();
            $table->string('long_Lat_SourcePoint', 45)->nullable();
            $table->string('long_Lat_DestPoint', 45)->nullable();
            $table->string('currentTime')->nullable();
		
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
        Schema::dropIfExists('OnRouteDetails_tbl');
    }
}

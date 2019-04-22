<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersAuthTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users_Auth_tbl', function (Blueprint $table) {
            $table->string('firstName', 45);
		    $table->string('lastName', 45);
		    $table->string('emailAddress', 320);
		    $table->string('Roles_Permissions_JSON');
		    //$table->string('authToken_JSON');
		    $table->boolean('Locked')->nullable();
		    $table->boolean('Disabled')->nullable();
		    $table->string('password');
		
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
        Schema::dropIfExists('UsersAuth_tbl');
    }
}

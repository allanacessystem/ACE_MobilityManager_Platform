<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;

class UserAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users_Auth_tbl')->insert([
            'firstName' => 'api',
            'lastName' => 'ctrl',
            'emailAddress' => 'api.ctrl@acesystems.co',
            'password' => Crypt::encryptString('password'),
            'Roles_Permissions_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}

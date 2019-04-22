<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AuthorizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'OnRouteDetails_tbl',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'Appointment_tbl',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'CustomerSurvey_tbl',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'TraveledHistory_tbl',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'home_tbl',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}

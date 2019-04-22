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
        //---------------------------------------  OnRouteDetails_tbl -----------------------------------------
        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'OnRouteDetails_tbl',
            'permission' => 'Create',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'OnRouteDetails_tbl',
            'permission' => 'Read',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'OnRouteDetails_tbl',
            'permission' => 'Update',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'OnRouteDetails_tbl',
            'permission' => 'Delete',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //---------------------------------------  CustomerSurvey_tbl -----------------------------------------
        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'CustomerSurvey_tbl',
            'permission' => 'Create',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'CustomerSurvey_tbl',
            'permission' => 'Read',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'CustomerSurvey_tbl',
            'permission' => 'Update',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'CustomerSurvey_tbl',
            'permission' => 'Delete',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //---------------------------------------  TraveledHistory_tbl -----------------------------------------
        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'TraveledHistory_tbl',
            'permission' => 'Create',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'TraveledHistory_tbl',
            'permission' => 'Read',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'TraveledHistory_tbl',
            'permission' => 'Update',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'TraveledHistory_tbl',
            'permission' => 'Delete',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //---------------------------------------  home_tbl -----------------------------------------
        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'home_tbl',
            'permission' => 'Create',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'home_tbl',
            'permission' => 'Read',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'home_tbl',
            'permission' => 'Update',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Authorization_tbl')->insert([
            'Users_JSON' => '{ "users": "allan.corda@acesystems.co" : "allan.corda@acesystems.co" }',
            'tableName' => 'home_tbl',
            'permission' => 'Delete',
            'group_granRole_role_JSON' => '{ "Roles": "Super_Admin" }',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        
    }
}

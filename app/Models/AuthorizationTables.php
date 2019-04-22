<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuthorizationTables extends Model
{
    protected $table = "Authorization_tbl";

    protected $primaryKey = 'tableName';

    public $incrementing = false;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Users_JSON', 'tableName', 'group_granRole_role_JSON'
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class AuthorizationTables extends Model
{
    protected $table = "Authorization_tbl";

    //public $primaryKey = 'tableName';
    public $primaryKey = ['tableName','permission'];

    public $incrementing = false;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Users_JSON', 'tableName', 'permission' , 'group_granRole_role_JSON'
    ];

    protected function setKeysForSaveQuery(Builder $query)
    {
        $query
            ->where('tableName', '=', $this->getAttribute('tableName'))
            ->where('permission', '=', $this->getAttribute('permission'));
        return $query;
    }

    protected function getKeyForSaveQuery()
    {

        $primaryKeyForSaveQuery = array(count($this->primaryKey));

        foreach ($this->primaryKey as $i => $pKey) {
            $primaryKeyForSaveQuery[$i] = isset($this->original[$this->getKeyName()[$i]])
                ? $this->original[$this->getKeyName()[$i]]
                : $this->getAttribute($this->getKeyName()[$i]);
        }

        return $primaryKeyForSaveQuery;

    }

    public function getKey()
    {
        return 'tableName';
    }

}

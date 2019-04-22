<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class registerUserRes extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'tableName' => $this->tableName,
        ];
    }
}

/*
Users_Auth_tbl
        return [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'emailAddress' => $this->emailAddress,
            'password' => $this->password
        ];
*/

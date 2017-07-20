<?php

namespace App\Exceptions;

use Exception;


class JsonPeopleHandler
{
    protected $json;

    public function __construct($json_input)
    {
        $this->json = $json_input;
    }

    public function validate()
    {

        if( !isset($this->json->data) )
        {
            throw new Exception('Missing member: data');
        }

        if( !isset($this->json->data[0]->first_name))
        {
            throw new Exception('Missing member: first_name');
        }

        if( !isset($this->json->data[0]->last_name))
        {
            throw new Exception('Missing member: last_name');
        }

        if( !isset($this->json->data[0]->age))
        {
            throw new Exception('Missing member: age');
        }

        if( !isset($this->json->data[0]->email))
        {
            throw new Exception('Missing member: email');
        }

        return true;

    }
}
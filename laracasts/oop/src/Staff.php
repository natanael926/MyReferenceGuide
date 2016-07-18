<?php

namespace App;

use App\Person as Person;

class Staff
{

    protected $members = [];

    public function __construct($menbers = [])
    {
        $this->members = $menbers;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members()
    {
        return $this->members;
    }
}
<?php

class Person {

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Business {

    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        $this->staff->members();
    }
}

class Staff {

    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
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

$person = new Person('Rudys Natanael');
$staff = new Staff([$person]);
$business = new Business($staff);

$business->hire(new Person('Juan Perez'));


var_dump($staff);
<?php

class User {

    protected $name;

    protected $age;


    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function name()
    {
        return $this->name;
    }

    public function age()
    {
        return $this->age;
    }

}

class UserCollection {

    protected $users;

    public function __construct(array $users) 
    {
        $this->users = $users;
    }

    public function users()
    {
        return $this->users;
    }

    public function sortBy($column) 
    {
        usort($this->users, function($userOne, $userTwo) use ($column) {
            return $userOne->$column() <=> $userTwo->$column();
        });
    }

}


$collection = new UserCollection([
    new User('Natanael', 28),
    new User('Maria', 16),
    new User('Estephany', 20),
    new User('Jonathan', 2),
    new User('Yudith', 1)  
]);

$collection->sortBy('age');


var_dump($collection->users());

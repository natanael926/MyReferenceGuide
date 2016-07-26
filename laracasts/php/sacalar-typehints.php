<?php


class User 
{

    private $name;

}


function getElement(int $num) {

    var_dump($num);

}

function getBool(bool $var) {
    var_dump($var);
}

function getObject(User $user)
{
    var_dump($user);
}


getElement('12');
// getElemnet('adads'); // This return error
 

getBool(true);
getBool(1);
getBool('hola');
getBool(0);
//getBool([]); // This return error


//getObject('asas'); //This return error
getObject(new User());

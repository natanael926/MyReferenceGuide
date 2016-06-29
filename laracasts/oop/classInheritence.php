<?php

class Share
{

}

class Square extends Share
{
    protected $length = 4;

    public function getArea()
    {
        return pow($this->length, 2);
    }
}



echo (new Share)->getArea();


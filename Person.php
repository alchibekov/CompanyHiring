<?php

class Person
{
    public $personName;

    public function __construct($personName)
    {
        $this->personName = $personName;
    }

    public function getPersonName()
    {
        return $this->personName;
    }
}
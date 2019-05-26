<?php
namespace App;

class Staff
{
    public $staff = array();

    public function __construct($persons)
    {
        foreach ($persons as $person)
        {
            $this->staff[] = $person;
        }
    }

    public function hireEmployee(Person $employee)
    {
        $this->staff[] = $employee;
    }

    public function fireEmployee($employee)
    {
        $result = array_search($employee,$this->staff,true);
        if($result !== false) {
            array_splice($this->staff,$result,1);
        }
    }

    public function fireEmployeeByName($employee)
    {
        foreach ($this->staff as $key => $person)
        {
            if ($person->getPersonName()==$employee) array_splice($this->staff,$key,1);
        }
    }
}
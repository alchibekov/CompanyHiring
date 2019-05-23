<?php

class Company
{
    public $companyName;
    public $staff;

    public function __construct($companyName, Staff $staff)
    {
        $this->companyName = $companyName;
        $this->staff = $staff;
    }

    public function hire($employee)
    {
        $this->staff->hireEmployee($employee);
    }

    public function fire($employee)
    {
        if ($employee instanceof Person)
        {
            $this->staff->fireEmployee($employee);
        }
        else
        {
            $this->staff->fireEmployeeByName($employee);
        }
    }
}



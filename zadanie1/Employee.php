<?php

require_once 'person.php';

class Employee extends Person
{
    private $salary;
    private $commision;
    
    public function __construct($name, $surname, $age, $gender, $salary, $commision)
    {
        parent::__construct($name, $surname, $age, $gender, $salary);
        
        $this->salary = $salary;
        $this->commision = $commision;
    }

    public function __toString() {
        return parent::__toString().' '.$this->salary;
    }

    public function salaryYear()
    {
        return $this->salary * 12;
    }
            
     public function display()
     {
         return $this->hello();
     }
            
     
     
}

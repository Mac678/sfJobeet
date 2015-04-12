
<?php

abstract class Person {

    private $name;
    private $surname;
    private $age;
    private $gender;

    public function __construct($name, $surname, $age, $gender) {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setAge($age);
        $this->setGender($gender);
    }

    public function setName($name) {
        $this->name = ucfirst($name);
    }

    public function getName() {
        return $this->name;
    }

    public function setSurname($surname) {
        $this->surname = ucfirst($surname);
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge($age) {
        return $this->age;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getdender() {
        return $this->$gender;
    }
    
      public function hello()
     {
         return $this->getName() . ' ' . $this->getSurname();
     }

}

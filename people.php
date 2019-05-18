<?php

class People
{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception("Not allowed under 18.");
        }

        $this->age = $age;
    }
}

$john = new People('John Doe');

$john->setAge(31);
$john->getAge();

var_dump($john);
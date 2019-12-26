<?php

class User
{
    public $age;

    public function __construct($age)
    {
        $this->setAge($age);
    }

    private function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        //return $this->age;
        echo 'Test';
        echo $this->age;
    }

}
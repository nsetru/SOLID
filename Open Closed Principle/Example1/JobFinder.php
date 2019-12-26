<?php
require_once "Tester.php";
require_once "Developer.php";

class JobFinder
{
    public $role;

    public $class;

    public function __construct($role)
    {
        $this->role = $role;
        $this->class = new $this->role();


    }

    public function checkTitle() {
        return $this->class->Title();

    }

    public function checkJobDesc() {
        return $this->class->JobDesc();
    }

}
<?php

require_once "Job.php";

class Tester implements Job
{
    public function Title()
    {
        // TODO: Implement Title() method.
        echo "I'm a Tester <br />";
    }

    public function JobDesc()
    {
        // TODO: Implement JobDesc() method.
        echo "My job is write tests for web applications";
    }
}
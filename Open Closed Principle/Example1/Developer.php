<?php

require_once "Job.php";

class Developer implements Job
{
    public function Title()
    {
        // TODO: Implement Title() method.
        echo "I'm a developer";
    }

    public function JobDesc()
    {
        // TODO: Implement JobDesc() method.
        echo "My job is to code";
    }

}
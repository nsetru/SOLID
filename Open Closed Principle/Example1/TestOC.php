<?php
require_once "JobFinder.php";

//echo 'test';
$role = "Tester";

$jobFinder = new JobFinder($role);
$jobFinder->checkTitle();
$jobFinder->checkJobDesc();
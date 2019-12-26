<?php

require_once "User.php";
require_once "UserFieldValidation.php";

$age = 32;

$user = new User($age);

$userValid = new UserFieldValidation($age);
$userValid->AgeValidation();

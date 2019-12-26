<?php


class UserFieldValidation extends User {

    public function __construct($age)
    {
        parent::__construct($age);
    }

    public function AgeValidation() {
        if ($this->age <= 14) {
            echo "Your age bracket between 0 - 14 years";
        } else if ($this->age > 14 and $this->age <= 20) {
            echo "Your age bracket between 14 - 20 year";
        } else if($this->age > 20 and $this->age <= 40) {
            echo "Your age bracket between 20 - 40 year";
        }

    }


}



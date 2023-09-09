<?php
include('./personal_detials.php');

class Form implements PersonalDetails{
    const NO_OF_HOURS=24;

    public $name;
    public $age;
    public $sleepingHours;

    public function __construct($name, $age, $sleepingHours){
        $this->name = $name;
        $this->age = $age;
        $this->sleepingHours = $sleepingHours;
    }

    // public function setFirstName($name);
    public function getFirstName(){
        return $this->name;
    }
    // public function setAge($age);
    public function getAge(){
        return $this->age;
    }
    // public function setSleepingHours($hours);
    public function getSleepingHours(){
        return $this->sleepingHours;
    }
}

    $obj = new Form("Rohan","26",7);
    echo $obj->getFirstName()."</br>";
    echo $obj->getAge()."</br>";
    echo $obj->getSleepingHours()."</br>";

    echo "Total sleeping hours: ".(Form::NO_OF_HOURS)*($obj->getAge());
?>
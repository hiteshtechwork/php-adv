<?php
// class is used for categorize the propeties and methods
class Person {
    // Properties
    public $name;
    public $eyeColor;
    public $age;


    // Constructor
    public function __construct($name, $eyeColor, $age=90){
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;

    }
    // Method

    public function setName(){

    }

    public function getName(){
        return $this->name;         //returning a propetry using a method
    }

}
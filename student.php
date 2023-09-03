<?php
// Create a PHP Constant
// To create a constant, use the define() function.

// Syntax
// define(name, value, case-insensitive)
// Parameters:
// name: Specifies the name of the constant
// value: Specifies the value of the constant
// case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
interface department{
    public const NAME = "Rohan Dhakad";
    public function getRollNo();
    public function setRollNo($rollNo);
    public function getName();
    public function setName($name);
    public function getAge();
    public function setAge($age);
}
?>ś
<?php
include("./vehicle.php");
include("./robot.php");


class mercedes extends robot implements vehicle{

    public $work;
    public function __construct($work){
        parent::__construct();
        $this->work = $work;
    }
    
    public function gear($num){
        return 2*$num;
    }
    public function type($type){
        return $type." with car";
    }
    public function method(){
        print("Bike is riding safely by rider");
    }
    public function company($companyName){
        return $companyName." Ford";
    }

    // //overriding method of robot(Parent) class
    // public function noOfMachineParts($num){
    //     return 3*$num;
    // }

    //overriding method of robot(Parent) class
    public function noOfMachineParts($num1, $num2){
        return 3*$num1*$num2;
    }
}

    $obj = new mercedes("Japanese machine","Good working");
    print($obj->gear(3));
    print("\n");
    print($obj->noOfMachineParts(2,4));
    print("\n");
    print($obj->isTransformer());
    print("\n");
    print_r($obj);

?>
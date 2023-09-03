<?php

class robot{

    public $machine;
    public function __construct($machine="no variable passed to the Parent Constructor") {
        $this->machine = $machine;
    }

    public function noOfMachineParts($num){
        return 2*$num;
    }
    public function isTransformer(){
        return true;
    }
}
?>
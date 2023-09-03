<?php

include('./robot.php');

class Android extends Robot{
    public function isTransformer(){
        print("It might be transformer.\n");
        print "I am not sure.\n";
    }
}

$obj = new Android();
$obj->isTransformer();

$obj1 = new robot();
print($obj1->isTransformer());
?>
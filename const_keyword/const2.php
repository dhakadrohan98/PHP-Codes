<?php

class GoodBye{
    const LEAVING_MESSAGE = "Thanks for visiting Tree academy";

    public function byeBye(){
        echo self::LEAVING_MESSAGE;
    }
}

$obj = new GoodBye();
$obj->byeBye(); 
echo GoodBye::LEAVING_MESSAGE;
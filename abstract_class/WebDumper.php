<?php

abstract class WebDumper{
    //Abstract method (without body & implementation)
    abstract public function getQuote();
    abstract public function getNews();

    //Non-abstract method (with Body & implementation)
    public function getExpenses($base_amount){
        return 2*3*$base_amount;
    }
}
?>
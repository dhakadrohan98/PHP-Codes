<?php
include('./WebDumper.php');

class AbstractImplement extends WebDumper{
    public function getQuote(){
        print("Do or die, let's die");
    }
    public function getNews(){
        print("Voldemort is back after making all his seven+1 horcruxes");
    }
}

$obj = new AbstractImplement();
echo $obj->getExpenses(15)."\n";
echo $obj->getQuote()."\n";
echo $obj->getNews()."\n";
?>
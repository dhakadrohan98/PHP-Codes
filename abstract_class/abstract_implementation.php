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
echo $obj->getExpenses(5)."</br>";
echo $obj->getQuote()."</br>";
echo $obj->getNews()."</br>";
?>
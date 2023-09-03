<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    echo "constructor method is called: "."\n";
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() {
    echo "destructor method is calling"."\n";
    echo "The fruit is {$this->name}"." and color is {$this->color}.";
  }
}

$apple = new Fruit("Apple","Red");
?>
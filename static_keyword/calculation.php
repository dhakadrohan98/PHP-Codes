<?php
class calculation{
  public static $number = 0;  
  
  public static function add1() {
    self::$number++;
    return self::$number;
  }
}

echo calculation::add1();
echo "\n";
echo calculation::add1();
echo "\n";
echo calculation::add1();
?>
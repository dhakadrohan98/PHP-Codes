<?php
   class database {
      private static $connection;

      private final function __construct(){
        echo __CLASS__ . " initialize only once ";
      }

      public static function getConnect(){
         if(!isset(self::$connection)){
            self::$connection = new database();
         }
         return self::$connection;
      }
   }
   $obj1 = database::getConnect();
   $obj2 = database::getConnect();
   var_dump($obj1 == $obj2);
?>
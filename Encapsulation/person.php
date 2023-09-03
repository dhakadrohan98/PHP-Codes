<?php
//Encapsulation example 
// Encapsulation is a concept where we encapsulate all the data and member functions together to form an object.  
class person  
{  
    public $name;  
    public $age; 

    function __construct($n, $a)  {  
        $this->name=$n;  
        $this->age=$a;  
    }

    public function setAge($ag)  {  
        $this->ag=$ag;  
    }  
    
    public function display()  {  
        echo  "welcome ".$this->name."\n";  
        return $this->age-$this->ag;  
    }  
   
}  
   
    $person=new person("Sonu",28);  
    $person->setAge(1);  
    echo "You are ".$person->display()." years old";  
   
?>  
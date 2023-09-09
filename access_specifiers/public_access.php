<?php  
class demo  {  
    public $name= "Ajeet";
    protected $age = 25;  
    private $spouse;

    public function display()  {  
    echo "Name from Grand parent class's side is: ".$this->name."\n";  
    }  

    //Setter and Getter for $spouse.
    public function setSpouse($spouse) {
        $this->spouse = $spouse;
    }

    public function getSpouse() {
        return $this->spouse;
    }
}
  
class child extends demo  {  
    function show()  {  
    echo "Name is ".$this->name."\n";
    echo "Age is ".$this->age."\n";  
    // echo "Wife is ".$this->getSpouse()."\n";
    }  
}     

    $obj= new child();  
    $obj1 = new demo();
    echo "Name from object side: ".$obj->name."\n";     
    // echo $obj->age."\n";
    $obj->display(); 
    $obj->show(); 

    $obj1->setSpouse("Priya Mam");
    echo "Wife is: ".$obj1->getSpouse()."\n";
?>  
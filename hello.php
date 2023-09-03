<?php
 require('./student.php');

 class Student implements department{
    private $rollNo;
    private $name;
    private $age;

    public function _construct(){
        $this->super();
    }

    public function getRollNo(){
        return $this->rollNo;
    }

    public function setRollNo($rollNo){
        $this->rollNo = $rollNo;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getAnotherName(){
        return NAME;
    }
}
    const Message = "Unique";
    $std1 = new Student();
    $std1->setRollNo(2);
    $std1->setName("Tinku");
    $std1->setAge(24);
    print($std1->getName() ." ".$std1->getRollNo()." ".$std1->getAge());
    print(Message);

    // define("cars", ["Alfa Romeo","BMW","Toyota"]);
    // echo "</br>";
    // $cars = ["Toyata"];
    // print(cars[0]);

?>
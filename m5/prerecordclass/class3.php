<?php
class Human {
    public $name;
    public $age;
    //this is a constructor method. If we use this method then no need to echo this object
    public function __construct($personName =Null, $personAge=null){
    //echo "New Human object is created";
    $this->name = $personName;
    $this->age = $personAge;
    }
    

    //this is a method
    function sayHi() {
        echo "===============\n";
        echo "Assalamualaikum\n";
        $this->sayName();
    }
    //This is another method
    public function sayName() {
        //echo "My name is {$this->name} \n";
        if ($this->age) {
        echo "My name is {$this->name}, I am {$this->age} years old\n";
        }else {
        echo "My name is {$this->name}, I don't know how old are you\n";

        }
    }
    



}
$h1 = new Human("Rashed", 35);
$h2 = new Human("Robin", 21);
$h3 = new Human("Rubel");
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();
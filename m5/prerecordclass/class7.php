<?php

//! If same method in Parent class and child class that time only run child class method\
//? Let's see the example bellow
/* class ParentClass{
protected $name;
public function __construct($name){
$this->sayHi();
}
public function sayHi(){
echo "Hi from {$this->name}";
}
}
class ChildClass extends ParentClass{
function sayHi(){
echo "Hello";
}
}

$cc = new ChildClass("ABCD"); */

//! If we want to run same method parent class and child class we should follow the follow systems
class ParentClass {
    protected $name;
    public function __construct( $name ) {
        $this->name = $name;
        $this->sayHi();
    }
    public function sayHi() {
        echo "Hi from {$this->name}\n";
    }
}
class ChildClass extends ParentClass {
    function sayHi() {
        parent::sayHi();
        echo "Hello\n";
    }
}

$cc = new ChildClass( "ABCD" );
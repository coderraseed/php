<?php
/* class Animal {
public function eat() {
echo "I am eating";
}
public function run() {
echo "I am running";
}
public function sleep() {
echo "I am sleeping";
}
public function Greet() { }

}

//!Class Inheritance
class Human extends Animal {
public function sayHi() {
echo "Hi";
}
}
$h1 = new Human();
echo $h1->sayHi();
 */

class Animal {

    //private  $name;// private property can't access from child class fot this reason we can use protected property in our main class
    protected $name; //

    public function __construct( $name ) {
        $this->name = $name;
    }
    public function eat() {
        echo "{$this->name} am eating\n";
    }
    public function run() {
        echo "{$this->name}am running\n";
    }
    public function sleep() {
        echo "{$this->name} am sleeping\n";
    }
    public function Greet() {}

    protected function addTitle( $title ) {
        $this->name = $title . "" . $this->name;
    }

}

//!Class Inheritance and Method override
class Human extends Animal {
    public function Greet() {
        $this->addTitle( "Mr." );
        echo "{$this->name} says Hi\n";
    }
}

class Cat extends Animal {
    public function greet() {
        echo "{$this->name} says Meow\n";
    }
}

$h1 = new Human( "Rasel" );
echo $h1->greet();
$h1->eat();
$cat = new Cat( "Tom" );
echo $cat->greet();
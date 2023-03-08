<?php

abstract class Shape {
    abstract function getArea();
    abstract function getPerimeter();

}

class Ractangle extends Shape {
    private $base, $height;
    public function __construct( $base, $height ) {
        $this->base   = $base;
        $this->height = $height;
    }

    public function setBase( $base ) {
        $this->base = $base;
    }
    public function setHeight( $height ) {
        $this->height = $height;
    }
    public function getArea() {
        return $this->base*$this->height;
    }
    function getPerimeter(){}

}

 class Triangle extends Shape {
    private $base, $height;
    public function getArea() {
        return $this->base*$this->height*1/2;
    }
    function getPerimeter(){}
}

$r = new Ractangle(10, 10);
echo $r->getArea();

echo PHP_EOL;
//! Another example of abstract class and method
abstract class Animal {

    abstract public function eat();
    abstract public function run();
    abstract public function sleep();
    abstract public function Greet();

}


class Human extends Animal {

    public function eat() {
        echo "I am eating\n";
    }
    public function run() {
        echo "I am running\n";
    }
    public function sleep() {
        echo "I am sleeping\n";
    }

    public function Greet() {
        echo "I says Hi\n";
    }
}

$h1 = new Human( );
$h1->eat();

<?php 
//! Step one
class Shape{}
class Shapes {
    private $shapes;
    public function __construct(){
        $this->shapes=array();
    }
    public function addShape($shape){
       array_push($this->shapes, $shape);
    }
    public function totalShapes(){
       return count($this->shapes);
    }
}

class Rectangle extends Shape {}
class TriAngle extends Shape{}
class Student {}


$r =new Ractangle();
$t =new TriAngle();

$shapesCollection = new Shapes();
$shapesCollection->addShape(new Ractangle());
$shapesCollection->addShape(new TriAngle());
$shapesCollection->addShape(new Student());

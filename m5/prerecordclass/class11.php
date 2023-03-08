<?php 
//! Step one
class ShapeD{}
class Shapes {
    private $shapes;
    public function __construct(){
        $this->shapes=array();
    }
    public function addShape(ShapeD $shape){
       array_push($this->shapes, $shape);
    }
    public function totalShapes(){
       return count($this->shapes);
    }
}

class RectangleD extends ShapeD {}
class TriAngleD extends ShapeD{}
class Student {}




$shapesCollection = new Shapes();
$shapesCollection->addShape(new RectangleD());
$shapesCollection->addShape(new TriAngleD());
//$shapesCollection->addShape(new Student());

echo $shapesCollection->totalShapes();

<?php 
abstract class Shape{
    protected $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){

    }
    abstract public function getArea();
}
class Ractangle extends Shape {
    private $length;
    private $height;


}
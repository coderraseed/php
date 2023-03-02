<?php 

//OOP in php

//How to write a class in php, Given bellow
class Person{
    //what is property, Property means variable inside the class, like
    
    public $name  = "Rashed";
    //What is method, Method means the function inside the class
    public function AddNumber($a,$b){
        $result = $a+$b;
        return $result; 
        
    }

    //how many security classification of property/method
    //there are four types of security classification are there, those are------- Public, Private, Static, Protected

    public $n = 2;//Public property means this property use any where of this class and object.
    private $m = 8;// Private means this property can't access out side of class
    protected $d = 6;
    static $f = 9;
}
//How to write an object, is given bellow
$human = new Person; // 
echo $human->AddNumber(1,2);
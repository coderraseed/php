<?php 

//!OOP in php

/* 
Object-Oriented Programming (OOP) is a programming paradigm that allows developers to organize code into reusable and modular components called objects. PHP is a popular programming language that supports OOP concepts. Here are some key features of OOP in PHP:

    Classes: Classes are the blueprints for creating objects in PHP. They define properties (variables) and methods (functions) that can be used to manipulate the object's state and behavior.

    Objects: Objects are instances of a class. They have their own set of properties and methods that can be accessed and modified through the object.

    Encapsulation: Encapsulation is the process of hiding the internal details of an object from the outside world. This is achieved in PHP by using access modifiers like public, private, and protected to control the visibility of class members.

    Inheritance: Inheritance allows developers to create new classes that inherit the properties and methods of existing classes. This enables code reuse and can help to reduce code duplication.

    Polymorphism: Polymorphism is the ability of an object to take on many forms. In PHP, this can be achieved through method overriding and method overloading.

    Abstraction: Abstraction is the process of focusing on the essential features of an object while ignoring the details that are not relevant. This is achieved in PHP by using abstract classes and interfaces.
*/

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


// git add file_name; git commit -m ""; git push origin master
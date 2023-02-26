<?php
//This is a class
class MyClass {
    //this is an constructor
    function __construct(){
        echo "I am a constructor";
    }

}

$obj = new MyClass();//This is an object
//This is a class
class MyClass {
    //this is an constructor
    function __construct($msg){
        echo $msg;
    }

}

$obj = new MyClass("I am a constructor ");//This is an object



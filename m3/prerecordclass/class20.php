<?php 

// variable scope in php
/* 
==============Variable Global scope===============
A variable with global scope can be accessed from anywhere in the PHP script, including within functions or methods. Global variables are declared outside of any function or method, usually at the top of the script, and can be accessed and modified from any part of the program. However, it's generally considered good practice to avoid using global variables as they can make it difficult to track changes to the variable value and can lead to bugs
*/
$name = "Earth";
 function globalScope(){
    global $name;
    echo $name;
    //echo $GLOBAL['name'];
 }
 globalScope();

/* 
============Variable Local scope:==============
 A variable with local scope is accessible only within the block of code in which it is declared, such as within a function or method. Local variables are created and destroyed each time the block of code is executed, and they cannot be accessed from outside the block. This helps to keep the code organized and prevents accidental changes to the variable value.
*/
 echo PHP_EOL;

 function localScope(){
    $name = "Earth";
    echo $name;
    
 }
 localScope();
 echo PHP_EOL;
/* 
=========Variable Static scope:==================
 A variable with static scope is similar to a local variable, in that it is accessible only within the block of code in which it is declared. However, static variables retain their value between calls to the same block of code, even though the variable is destroyed and recreated each time the code is executed. This can be useful in situations where you need to keep track of a value between function calls or method invocations.
*/
function staticScope(){
    static $counter = 0;
    $counter++;
    echo "Counter value: $counter \n";
    
 }
 staticScope();
 staticScope();
 staticScope();
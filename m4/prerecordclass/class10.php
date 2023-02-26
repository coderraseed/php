<?php
$fruits = ['apple', 'banana', 'mango', 'plum', 'orange', 'straberry'];
print_r($fruits);
print_r(array_slice($fruits, 2));
print_r(array_slice($fruits, 2,2));
print_r(array_slice($fruits, -5));
print_r(array_slice($fruits, -5,-1));
print_r(array_slice($fruits, -3,-1, true));

//extract data from associative array
$student = [
    'fname' => 'Rafida',
    'lname' => 'Wasifa',
    'age' => 8,
    'class' => 2,
    12  =>  20,
    'section' => 'B',
    
];
print_r(array_slice($student, 1));
print_r(array_slice($student, -3, 4));
//This is used for actual key
print_r(array_slice($student, 1, null, true));
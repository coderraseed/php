<?php
/* $fruit1 = ['apple', 'banana', 'mango', 'plum', 'orange', 'strawberry'];

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];  */
$fruits = [
    'a' => ' apple',
    'b' => 'malta',
    'd' => 'mango',
    'e' => 'lemon',
    'j' => 'orange',
    'k' => 'pear'
];
/* shuffle($fruits);
print_r($fruits); */

//The array_rand() function is a built-in function in PHP that returns one or more random keys from an array. The function takes two arguments: the first argument is the array from which you want to get the random key(s), and the second argument is optional and represents the number of random keys you want to get from the array.

$arrayKey = array_rand($fruits);
echo $arrayKey;
echo PHP_EOL;
echo $fruits[$arrayKey];
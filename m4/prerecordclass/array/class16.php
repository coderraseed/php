<?php

//!Some array functions

$fruit1 = ['apple', 'banana', 'mango', 'plum', 'orange', 'strawberry'];
$fruit2 = ['apple', 'malta', 'mango', 'lemon', 'orange', 'pear'];

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

//?The array_walk() function applies the user-defined function to each element of the input array, one by one. The function receives two parameters - the value of the current element, and the key of the current element (if the input array is an associative array).
/* function square($n) {
printf("Square of %d is %d\n", $n, $n*$n);
}
array_walk($numbers, 'square'); */

//*array_map() is a PHP function that applies a callback function to each element of an array and returns a new array containing the results. It takes at least two parameters: the callback function to be applied to the array, and the array to be processed. Optionally, it can take additional arrays as arguments, which will be used as input to the callback function in addition to the original array.
/* 
function cube( $n ) {
    return $n * $n * $n;
}
$cubeArray = array_map( 'cube', $numbers );
print_r( $cubeArray ); */

//?The array_filter() function in PHP is used to filter an array based on some condition, and returns a new array with only the values that satisfy the condition. It accepts two arguments - the first one is the input array, and the second one is an optional callback function that is used to define the condition.
/* 
function even( $n ) {
    return $n % 2 == 0;
}
function odd( $n ) {
    return $n % 2 == 1;
}
$evenNumber = array_filter( $numbers, 'even' );
$oddNumber = array_filter( $numbers, 'odd' );
print_r( $evenNumber );
print_r( $oddNumber ); */
echo "===============\n";
function filterByM($name){
    return $name[0] == 'm';
}
$fruit = array_filter($fruit2, 'filterByM');
print_r($fruit);
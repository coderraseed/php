<?php 

//duiti index and associated array difference and intersection

$fruit1  = ['apple', 'banana', 'mango', 'plum', 'orange', 'strawberry'];
$fruit2  = ['apple', 'malta', 'mango', 'lemon', 'orange', 'pear'];

$number1 = [1, 2, 4, 3, 8, 6, 9, 45, 31, 35, 39, 13, 7];   
$number2 = [1, 'b'=>28, 4, 34, 8, 6, ];   

//?array_intersect() is a PHP built-in function that returns an array containing all the values of the input arrays that are present in all of them. In other words, it finds the intersection of two or more arrays and returns the common values.

$common_fruits = array_intersect($fruit1, $fruit2);
print_r($common_fruits);


//*array_intersect_assoc(): This function returns an array containing all the key-value pairs from the first array that are present in all of the other arrays. It compares the key-value pairs of arrays using a strict comparison (===) operator.

$common_fruits = array_intersect_assoc($fruit1, $fruit2);
print_r($common_fruits);

//?array_intersect_key(): This function returns an array containing all the keys from the first array that are present in all of the other arrays. It compares only the keys of arrays, not the values.

$common_fruits = array_intersect_key($number1, $number2);
print_r($common_fruits);

//*array_diff(): This function returns an array containing all the values from the first array that are not present in any of the other arrays. It compares the values of arrays using a loose comparison (==) operator

$arraDiff= array_diff($number1, $number2);
print_r($arraDiff);

//?array_diff_assoc(): This function returns an array containing all the key-value pairs from the first array that are not present in any of the other arrays. It compares the key-value pairs of arrays using a strict comparison (===) operator
$arraDiff= array_diff_assoc($number1, $number2);
print_r($arraDiff);

//*array_diff_key(): This function returns an array containing all the keys from the first array that are not present in any of the other arrays. It compares only the keys of arrays, not the values.
$arraDiff= array_diff_key($number1, $number2);
print_r($arraDiff);





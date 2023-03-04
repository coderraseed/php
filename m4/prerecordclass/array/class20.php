<?php
/* $fruit1 = ['apple', 'banana', 'mango', 'plum', 'orange', 'strawberry'];
$fruit2 = ['apple', 'malta', 'mango', 'lemon', 'orange', 'pear'];

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];  */

$number = range( 1, 45 );
/*print_r($number);
echo count($number);
echo PHP_EOL; */

//mt_rand() is a built-in PHP function that generates a random integer using the Mersenne Twister algorithm. It is a more advanced version of the rand() function, which is an older, simpler random number generator.
$random_num = mt_rand(0, 10);
echo $random_num; // outputs a random integer between 0 and 10 (inclusive)


$random_num = mt_rand(5, 15);
echo $random_num; // outputs a random integer between 5 and 15 (inclusive)

$random = mt_rand( 0, 44 );
/* echo $random;
echo PHP_EOL;
$random = mt_rand( 1, 45 );
echo $random; */

$luck = $number[$random];

$result = ( $luck % 2 == 0 ) ? "Head" : "Tail";
echo $result;

$random_num = mt_rand(5, 15);
echo $random_num; // outputs a random integer between 5 and 15 (inclusive)


//The shuffle() function in PHP is used to randomly shuffle the order of elements in an array. It takes an array as input and modifies the order of elements within that array. The shuffle() function is useful for generating random orderings of elements, such as when shuffling a deck of cards or generating random quiz questions.

shuffle($number);
print_r($number);
$randomNumber = $number[3];
echo $randomNumber;

$numbers = array(1, 2, 3, 4, 5);
shuffle($numbers);
print_r($numbers);

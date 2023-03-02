<?php
// Discuss about Logical operator and logic
/*
Logical Operators
Example         Name        Result
$a and $b       And         true if both $a and $b are true.
$a or $b        Or          true if either $a or $b is true.
$a xor $b       Xor         true if either $a or $b is true, but not both.
!$a             Not         true if $a is not true.
$a && $b        And         true if both $a and $b are true.
$a || $b        Or          true if either $a or $b is true.

 */

$n = 13;
if ( $n % 2 == 0 ) {
    echo "{$n} is an even number\n ";
} else {
    echo "{$n} is an odd number \n";
}

//$a == $b     Equal             true if $a is equal to $b after type juggling.
$a = 12;
$b = 12;
if ( $a == $b ) {
    echo "A is equal to B \n";
}
$b = 13;
//$a != $b     Not equal         true if $a is not equal to $b after type juggling.
if ( $a != $b ) {
    echo "A is not equal to B \n";
}
//$a <> $b     Not equal         true if $a is not equal to $b after type juggling.
if ( $a != $b ) {
    echo "A is not equal to B\n ";
}

/* 
Comparison Operators
$a == $b     Equal             true if $a is equal to $b after type juggling.
$a < $b      Less than         true if $a is strictly less than $b.
$a > $b      Greater than      true if $a is strictly greater than $b.
$a <= $b     Less than or equal to         true if $a is less than or equal to $b.
$a >= $b     Greater than or equal to      true if $a is greater than or equal to $b. 
*/
$hasin  = 20;
$rabbil = 25;
if ($hasin==$rabbil) {
    echo "Hasin and Rabbil has same amount of money";
} elseif ($hasin>$rabbil) {
    echo "Hasin has more money then Rabbil";
} elseif($hasin<$rabbil) {
    echo "Hasin has less money then Rabbil";
}elseif($hasin>=$rabbil) {
    echo "Hasin has same or more money then Rabbil";
}elseif($hasin<=$rabbil) {
    echo "Hasin has same or less money then Rabbil";
}

/* 
Logical Operators
$a && $b        And         true if both $a and $b are true.
*/
$age =18;
if ($age>=13 && $age <=21) {
    echo "This person is a teenager \n";
}else{
    echo "This person is not a teenager \n";
}

$food ="Tuna";
if ($food=="tuna") {
    echo "It has vitamin D \n";
}

$food1 ="Apple";
//Scaller value ke write a rakha valo
/* 
//if we write following line then show an error
if ("apple"=$food1) {
    echo "It has vitamin D \n";
} 
*/

//This is the correct code
if ("Tuna"==$food1) {
    echo "It has vitamin D \n";
}else{
    echo "We don't know if it contains vitamin D\n"; 
}

/* 
Logical Operators
$a || $b        Or          true if either $a or $b is true. 
*/
if ("Tuna"==$food || "banan"==$food1) {
    echo "It has vitamin D \n";
}elseif("Apple"==$food1){
    echo "Apple dose not contain vitamin D";
}else{
    echo "We don't know if it contains vitamin D\n"; 
}
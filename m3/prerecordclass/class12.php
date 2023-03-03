<?php 
/* 
In PHP, a function is a block of code that performs a specific task and can be reused multiple times throughout the program. Functions allow you to organize your code into smaller, more manageable chunks and make your code more modular and reusable.

To write a function in PHP, you use the function keyword followed by the function name and a pair of parentheses. Inside the parentheses, you can specify any parameters that the function will accept. After the parentheses, you open a set of curly braces {} to enclose the function body.
*/
/* 
function evenOrOdd($num) {
    if ($num % 2 == 0) {
      return "$num is even";
    } else {
      return "$num is odd";
    }
}
 echo evenOrOdd(13) . "\n";
  */

// you can write this function another away 

function evenOrOdd($num) {
    if ($num % 2 == 0) {
      return true;
    } 
    return false;
}
$n = 12;
if (evenOrOdd($n)) {
    echo "{$n} is an even number";
  } else {
    echo "{$n} is an odd number";
  }
 echo evenOrOdd(13) . "\n";


  
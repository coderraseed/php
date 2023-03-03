<?php 
//What is The Fibonacci series?

//The Fibonacci series is a sequence of numbers in which each number is the sum of the two preceding numbers. The sequence starts with 0 and 1, and the subsequent numbers are obtained by adding the previous two.
/* echo "=======This is FOR loop=========\n";
for ( $i = 0; $i < 10; $i++ ) {
    echo $i;
    echo PHP_EOL;
}
echo PHP_EOL; */
echo "=======Fibonacci series=========\n";

$number1 = 0;
$number2 = 1;
$number3= 1;
for ($i=0; $i < 10; $i++) { 
    echo $number1. " ";
    echo $number2. " ";
    echo $number3. " ";
    echo PHP_EOL;
    $number1 = $number2;
    $number2 = $number3;
    $number3 = $number1+$number2;
}

echo "=======Fibonacci series=========\n";
$number1 = 0;
$number2 = 1;
$number3= 1;
for ($i=0; $i < 10; $i++) { 
    echo $number1. " ";
    $number1 = $number2;
    $number2 = $number3;
    $number3 = $number1+$number2;
}

echo PHP_EOL;


echo "=======Fibonacci series=========\n";
$number1 = 0;
$number2 = 1;
echo $number1 . ' ' . $number2 . ' ';

for ($i = 1; $i < 10; $i++) {
  $number3 = $number1 + $number2;
  echo $number3 . ' ';
  $number1 = $number2;
  $number2 = $number3;
}

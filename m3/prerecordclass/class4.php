<?php 
//factorial
$number = 6;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
  $factorial *= $i;
}
echo "The factorial of $number is $factorial.";
echo PHP_EOL;

echo "=======This is another away=========\n";

$number = 6;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
  $factorials = $factorial * $i;
}
echo "The factorial of $number is $factorials.";
echo PHP_EOL;

echo "=======This is another away=========\n";



$number = 5;
$factorial = 1;



for ($i = 1; $i <= $number; $i++) {
  $factorial *= $i;
}

echo implode('*', range(1, $number)) . '=' . $factorial;


echo PHP_EOL;

echo "=======This is another away=========\n";

$number = 5;
$factorial = 1;
$numbers = range(1, $number);

foreach ($numbers as $num) {
  $factorial *= $num;
}

echo implode('*', $numbers) . '=' . $factorial;

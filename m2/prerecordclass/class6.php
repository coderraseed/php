<?php
//Jog bioyg gun vag niey aro kisu kotha

//[$num = 12+23] eitake bole operation, ekhane [12] operands, [+] operator
$num = 12 + 23;
//Two variable assign same value
$x = $y = 14;
echo $x, "\n", $y, "\n";
echo "================\n";
//increment and decrement
$number = 12;
$number++;
echo $number, "\n";

echo "================\n";
//Increment value
$a = 8;
$b = $a++;
/*
$b=$a++ means
$b= $a and
$a=$a+1
 */
echo $b, "\n", $a, "\n";
echo "================\n";

$c = 9;
$d = ++$c;

/*
$d=++$c means
$c = $c+1
$d = $c
 */
echo $d, "\n", $c, "\n";
echo "================\n";

// decrement
$decrement = 12;
$decrement--;
echo $decrement, "\n";

echo "================\n";
//Increment value
$f = 8;
$g = $f--;
/*
$g=$f-- means
$g= $f and
$a=$f-1
 */
echo $g, "\n", $f, "\n";

echo "================\n";

$h = 9;
$k = --$h;

/*
$k=--$h means
$h = $h-1
$k = $h
 */
echo $k, "\n", $h, "\n";
echo "================\n";

<?php
// php te jog biog gun vag
 
$number =12;
//if we add 12 with 13 we can write following way. Those three line show same out put
$number=12+13; //or
echo $number ."\n";
echo "=============\n";
$n=12;
$n = $n+13;
echo $n ."\n";
echo "=============\n";
$m=12;
$m +=13;
echo $m ."\n";
echo "=============\n";

//Multiple variable in one line
echo "Value of n variable =" .$n ."\n"."Value of m variable =" . $m ."\n". "Value of number variable =" .$number ."\n";
echo "=============\n";
//Uporer function guli sob guli 

//arithmetics operator (+-*/%)

$l = 12;
$m = 45;
$n = 9;

$add = $n+$m+$l;
$substract = $n+$m-$l;
$multipli = ($m*$n)+$l;
$division = ($m/$n)+($l+8);
echo "{$add} \n";//addition
echo "{$substract} \n" ;//subtracts
echo "{$multipli} \n" ;//multiply
echo "{$division} \n" ;//division
echo $division%4 ; // Modulas mane vagshe
echo "\n";
echo $division%9 ; // Modulas mane vagshe
echo "\n";
echo "================\n";
// assignment operator (+=,-=,*=,/=,)
$p = 5;
$l += $l; // menas $l =$l+$l
$m -= $m; // menas $l =$m-$m
$n /= $n; // menas $l =$n/$n
$p *= $p; // menas $l =$p*$p

echo $l;
echo "\n";
echo $m;
echo "\n";
echo $n;
echo "\n";
echo $p;
echo "\n";




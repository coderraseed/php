<?php 
    //arithmetics operator (+-*/%)

    $l = 12;
    $m = 45;
    $n = 9;

    $add = $n+$m+$l;
    $substract = $n+$m-$l;
    $multipli = ($m*$n)+$l;
    $division = ($m/$n)+($l+8);
    echo "{$add} \n";
    echo "{$substract} \n" ;
    echo "{$multipli} \n" ;
    echo "{$division} \n" ;
    echo $division%4 ; // Modulas mane vagshe
    echo "\n";
    echo $division%9 ; // Modulas mane vagshe
    echo "\n";


// assignment operator (+=,-=,*=,/=,)
$p = 5;
$l+= $l;// menas $l =$l+$l
$m-= $m;// menas $l =$l+$l
$n/= $n;// menas $l =$l+$l
$p*= $p;// menas $l =$l+$l

echo $l;
echo "\n";
echo $m;
echo "\n";
echo $n;
echo "\n";
echo $p;
echo "\n";
?>
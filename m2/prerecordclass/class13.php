<?php
//Ternary Operator 


$n =13;
//Normal Condition
if ( $n == 12 ) {
    echo "Twelve ";
} elseif(10==$n) {
    echo "Ten";
}else{
    echo "A number";
}
echo PHP_EOL;
//ternary condition
$number = ( $n == 12 ) ? "Twelve" : "A number";
$number = ( $n == 12 ) ?"Twelve ":((10==$n)?"Ten":"A number");
echo $number;
echo PHP_EOL;

//Normal Condition
if ( $n % 2 == 0 ) {
    echo "{$n} is an even number ";
} else {
    echo "{$n} is an odd number ";
}
echo PHP_EOL;
//ternary condition
$result = ( $n % 2 == 0 ) ? "{$n} is an even number": "{$n} is an odd number ";
echo $result;
echo PHP_EOL;

$tuitionFee = 20000;
$discount1 = ($tuitionFee / 100) * 25;
$discount2 = ($tuitionFee / 100) * 20;
$discount3 = ($tuitionFee / 100) * 15;

$commCltr = ($tuitionFee >= 20000) ? "25% commission \${$discount1}" : (($tuitionFee >= 10000) ? "20% commission \${$discount2}" : (($tuitionFee >= 7000) ? "15% commission \${$discount3}" : "Not applicable for commission"));

echo $commCltr;
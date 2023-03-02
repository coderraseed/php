<?php
$n = 13;
$r = $n % 2;
switch ( $r ) {
case 0:
    echo "{$n} is an even number ";
    break;
default:
    echo "{$n} is an odd number ";
    break;
}
echo PHP_EOL;

$color = "red";
/*
switch ( $color ) {
case 'red':
echo "Red is our favorite color";
break;
case 'green':
echo "Green is our favorite color";
break;
case 'blue':
echo "Blue is not our favorite color";
break;
default:
echo "This color is ok";
break;
}

echo PHP_EOL;
*/
switch ( $color ) {
/* case 'red':
echo "Red is our favorite color";
break;
case 'green':
echo "Green is our favorite color"; 
break;*/
case 'red':
case 'green':
echo ucwords($color)." is our favorite color";
break;
case 'blue':
echo "Blue is not our favorite color";
break;
default:
echo "This color is ok";
break;
}  
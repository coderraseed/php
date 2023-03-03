<?php 
//smart code vs dumb code

/* $n = 6;
$factorial = 1;

for ($i = 1; $i <= $n; $i++) {
  $factorial *= $i;
}
echo "The factorial of {$n} is {$factorial}.";
echo PHP_EOL;
 */




/*  
for($n = 1; $n <= 10; $n++){
    $factorial = 1;
    for ($i = 1; $i < $n; $i++) {
        echo $i. " ";
    $factorial *= $i;
    }
    echo "The factorial of {$n} is {$factorial}.";
    echo PHP_EOL;
} */
$j=1;
for($n = 1; $n <= 10; $n++){
    $factorial = 1;
    for ($i = $n; $i > 1; $i--) {
        
        $factorial *= $i;
        $j++;
    }
    echo "The factorial of {$n} is {$factorial}.";
    echo PHP_EOL;

}
echo "Total {$j} number of Operations";
 
$factorial = 1;
$j=1;
for($n = 1; $n <= 10; $n++ ){
    $factorial *= $n;
    $j++;
    
    echo "The factorial of {$n} is {$factorial}.";
    echo PHP_EOL;
    
}
echo "Total {$j} number of Operations";
/*


for($n = 1; $i >= 20; $n++){
    $factorial = 1;
    for ($i = $n; $i > 1; $i++) {
    $factorial *= $i;
    }
    echo "The factorial of {$n} is {$factorial}.";
    echo PHP_EOL;
} */

/* $j=1;
for($n = 1; $i >= 20; $n++){
    $factorial = 1;
    for ($i = $n; $i > 1; $i++) {
    $factorial *= $i;
    $j++; 
    }
    echo "The factorial of {$n} is {$factorial}.";
    echo PHP_EOL;
}
echo "Total {$j} number of Operations"; */

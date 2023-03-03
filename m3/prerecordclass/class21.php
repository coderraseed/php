<?php 
//Recursive function used for factorial of any number

function numberFactorial($n){
    if($n<=1){
        return 1;
    }
    return $n* numberFactorial($n-1);
}

echo numberFactorial(4);

echo PHP_EOL;

function factorial($n) {
    // base case
    if ($n == 0) {
        return 1;
    }
    // recursive case
    else {
        return $n * factorial($n - 1);
    }
}

// calculate the factorial of 5
echo factorial(5); // Output: 120

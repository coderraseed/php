<?php 

/* 
Function parameter type hinting in PHP is a feature that allows you to specify the expected data type of a function's parameter. By using type hinting, you can make your code more readable and prevent unexpected errors that might occur if the wrong data type is passed to the function.

To use parameter type hinting in PHP, you simply add the data type in front of the parameter name in the function declaration. For example:

function myFunction(string $param1, int $param2) {
    function body
}

*/

//this code php7+ version is allow
function factorial(int $n){ //here int means value of $n must be integer
    $result = 1;
    for($i=$n; $i>1; $i--){
        $result *=$i;
    }
    return $result;
}

echo factorial(5);


echo PHP_EOL;
//for php6 and bellow


function factorials($n){
    if(gettype($n)!= "integer"){
        return "invalid";
    }

    $result = 1;
    for($i=$n; $i>1; $i--){
        $result *=$i;
    }
    return $result;
}

echo factorials("a");
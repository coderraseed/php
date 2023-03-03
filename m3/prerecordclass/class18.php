<?php 

/* 
A recursive function in PHP is a function that calls itself one or more times within its own code block. This can be a useful technique for solving problems that can be broken down into smaller subproblems, where the solution to each subproblem depends on the solution to smaller subproblems.

In a recursive function, there are usually one or more base cases that terminate the recursion and one or more recursive cases that call the function again with a modified input. The base cases are necessary to prevent the function from calling itself indefinitely, while the recursive cases allow the function to solve more complex problems by breaking them down into smaller subproblems.
*/
function recursive($i){
    if($i>=10){
        return;
    }
    echo $i. " ";
    $i++;
    recursive($i);
}

recursive(1);

echo PHP_EOL;


function printNumber($start, $end){
    if($start>=$end){
        return;
    }
    echo $start. " ";
    $start++;
    printNumber($start, $end);
}

printNumber(1,20);


echo PHP_EOL;

//Add stepping

function printRecursive($start, $end, $stepping=1){
    if($start>=$end){
        return;
    }
    echo $start. " ";
    $start+=$stepping;
    printRecursive($start, $end, $stepping);
}

printRecursive(1,20,4);


echo PHP_EOL;












function fibonacci($n) {
    if ($n == 0) {
        return 0;
    }
    elseif ($n == 1) {
        return 1;
    }
    else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}
for ($i = 0; $i < 10; $i++) {
    echo fibonacci($i) . " ";
}

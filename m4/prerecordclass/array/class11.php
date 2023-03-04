<?php
$fruits = ['apple', 'banana', 'mango', 'plum', 'orange', 'straberry'];
print_r($fruits);
$newFruits = ['black Berry', 'jakfruite'];
$fruits2 = array_splice($fruits, 2 );
print_r($fruits2);
print_r($fruits);
$fruits3 = array_splice($fruits, 1, 5, $newFruits );
print_r($fruits3);
//print_r(array_splice($fruits, 2,2));
//print_r(array_splice($fruits, -5));
//print_r(array_splice($fruits, -5,-1));
//print_r(array_splice($fruits, -3,-1, true));


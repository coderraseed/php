<?php 

$fruit1 = ['apple', 'banana', 'mango', 'plum', 'orange', 'strawberry'];
$fruit2 = ['apple', 'malta', 'mango', 'lemon', 'orange', 'pear'];

$numbers = [1, 2, 3, 4, 5, 6, 7];

//*array_reduce() is a PHP function that iteratively reduces an array to a single value using a callback function. The callback function takes two parameters: the first parameter represents the current state of the reduction, and the second parameter represents the current element being processed.

function sum($oldValue, $newValue){
    return $oldValue+$newValue;
}
$sum = array_reduce($numbers, 'sum');
echo $sum;

echo "\n=============================\n";
function sumOfOddNumber($oldValue, $newValue){
    if ($newValue%2==1) {
        return $oldValue+$newValue;        
    }else {
        return $oldValue;
    }
}
$sum = array_reduce($numbers, 'sumOfOddNumber');
echo $sum;
echo "\n=============================\n";

function sumOfEvenNumber($oldValue, $newValue){
    if ($newValue%2==0) {
        return $oldValue+$newValue;        
    }else {
        return $oldValue;
    }
}
$sum = array_reduce($numbers, 'sumOfEvenNumber');
echo $sum;
echo "\n=============================\n";


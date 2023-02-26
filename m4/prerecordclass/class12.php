<?php
$fruits = ['apple', 'banana', 'mango', 'plum', 'orange', 'straberry'];


$newfruits1 = array_slice($fruits, 0, 3);
$newfruits2 = array_slice($fruits, 3); //Withou key preserve 

print_r($newfruits1);
print_r($newfruits2);

$newfruits = array_merge($newfruits1, $newfruits2);
print_r($newfruits);

// jodi index number thik na thake tahole ki hobe nicher operation a***
$newfruitsPlus = $newfruits1 + $newfruits2;//Withou key preserve so don't show all values
print_r($newfruitsPlus);

//if index number is same the first array then the out put is
echo "key preserve so shows all values of an array";
$newfruits3 = array_slice($fruits, 3, null, true);//key preserve so show all values
$newfruitsPlus = $newfruits1 + $newfruits3;
print_r($newfruitsPlus);


$randomData = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
    'e' => 5,
    'f' => 6,
    'g' => 7,
];

$random = array_splice($randomData,2,2,array('h'=>8,'j'=>9));
print_r($random);
print_r($randomData);
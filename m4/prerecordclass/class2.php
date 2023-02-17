<?php 
$trainees = [
    "rahim",
    "karim",
    123,
    "monir",
];

//php te array inmutable na, php te array mutable mane hosse php array modify kora jai
$trainees[2] = 'Shafiq';

$m = count($trainees);
for ($i=0; $i <$m; $i++) {
    echo $trainees[$i] . "\n";
}
echo PHP_EOL;
$deduct = array_pop($trainees);
$n = count($trainees);
for ($i=0; $i <$n; $i++) {
    echo $trainees[$i] . "\n";
}
echo PHP_EOL;
$deduct = array_shift($trainees);
$n = count($trainees);
for ($i=0; $i <$n; $i++) {
    echo $trainees[$i] . "\n"; 
    
}
echo PHP_EOL;
array_unshift($trainees, "Mahabub");
array_push($trainees, "Manik");

$n = count($trainees);
for ($i=0; $i <$n; $i++) {
    echo $trainees[$i] . "\n"; 
}
//array_push();  //Use to add element inside the array at last position
//array_unshift();// Use to add element inside the array at first position
//array_shift(); // Use to remove first element from array
//array_pop();// use to remove last element of array

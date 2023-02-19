<?php
$student = [
    'fname' => 'Rafida',
    'lname' => 'Wasifa',
    'age' => 8,
    'class' => 2,
    'section' => 'B',

];
print_r($student);
echo $student['fname']." ".$student['lname']."\n" ;
printf("%s %s \n", $student['fname'], $student['lname']);

echo join($student)."\n";
//serilize() use to serial the array element
$serialized =serialize($student);
echo ($serialized)."\n";

//unserilize() use to convert an array from the serialize data

$unserialized =unserialize($serialized);
print_r($unserialized)."\n";

$jsondata = json_encode($student);
echo $jsondata;
//php te json data decode korle sei data object a rupantorito hoi, jemon
$student2 = json_decode($jsondata);
echo "This is an object";
print_r($student2);
echo PHP_EOL;
// php te json data decode kore associative array te rupantorito korte hole json_decode() function er moddhe akti argument "true" pass korte hoi, jemon
$student2 = json_decode($jsondata, true);
echo "This is an associative array";
print_r($student2);
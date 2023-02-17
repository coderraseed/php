<?php
//$n = 12;//variable

// This is an array
$student = array(
    "rahim",
    "karim",
    123,
    "monir",
);
var_dump($student);
echo $student[0];
echo PHP_EOL;

$n = count($student);
for ($i=0; $i < $n; $i++) {
    echo $student[$i] . "\n";
}
$trainees = [
    "Rabin",
    "Rabiul",
    "Rabbil",
    "Ripon",
];
$m = count($trainees);
for ($i=$m-1; $i >=0; $i--) {
    echo $trainees[$i] . "\n";
}


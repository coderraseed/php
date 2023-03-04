<?php 
$student = [
    'fname' => 'Rafida',
    'lname' => 'Wasifa',

];

print_r($student);
unset($student['lname']);
echo "After removing the data from an array";
print_r($student);
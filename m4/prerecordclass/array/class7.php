<?php

//copy by value or deep copy system
$student = [
    'fname' => 'Rafida',
    'lname' => 'Wasifa',

];
$newstudent = $student;

$newstudent['lname'] = 'Toyeba';
print_r( $student );
print_r( $newstudent );

// copy by reference "&" using this symbol before a variable

$student = [
    'fname' => 'Rafida',
    'lname' => 'Wasifa',

];
$newstudent          = &$student; //reference copy means copy the memory place
$newstudent['lname'] = 'Toiyeba';
print_r( $student );
print_r( $newstudent );

//Shallo copy

$student = [
    'fname' => 'Rafida',
    'lname' => 'Wasifa',

];
$newstudent          = &$student;
$newstudent['lname'] = 'Toiyeba';
print_r( $student );
print_r( $newstudent );

function printData( $student ) {
    $student['fname'] .= ' Wafia';
    print_r( $student );
}
printData( $student );
print_r( $student );

//only function name change "&" symbol position change so out put also change
//Shallo copy

$student = [
    'fname' => 'Rafida',
    'lname' => 'Wasifa',

];
$newstudent          = $student;
$newstudent['lname'] = 'Toiyeba';
print_r( $student );
print_r( $newstudent );

function printDatar( &$student ) {
    $student['fname'] .= ' Wafia';
    print_r( $student );
}
printDatar( $student );
print_r( $student );
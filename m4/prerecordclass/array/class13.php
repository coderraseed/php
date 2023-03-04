<?php
//============What is array sorting ===============
/*
In programming, an array is a collection of data items of the same type that are stored in contiguous memory locations. Sometimes it becomes necessary to rearrange the elements of an array in a particular order based on certain criteria such as numerical or alphabetical order. This process of rearranging the elements of an array in a particular order is known as array sorting.

In PHP, there are several built-in functions available for sorting arrays, such as
!sort(), rsort(), asort(), arsort(), ksort(), krsort(), usort(), uasort(), uksort(), natsort(), natcasesort(), and array_multisort().
Each of these functions sorts the array differently based on different criteria, such as alphabetical or numerical order, case sensitivity, and user-defined
 */

//?sort() function is used to sort an array in ascending order, according to its values. It can be used to sort arrays of numeric or string values.
echo "==========sort() function===========\n";
$numbers = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3];
sort( $numbers );
print_r( $numbers );

//*rsort(): Sorts an array in reverse order.
echo "==========rsort() function===========\n";
$numbers = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3];
rsort( $numbers );
print_r( $numbers );

//?asort(): Sorts an array by value, maintaining key-value associations.
echo "==========asort() function===========\n";
$ages = ["Alice" => 25, "Bob" => 30, "Charlie" => 20, "David" => 35];
asort( $ages );
print_r( $ages );

//* The arsort() function is similar to asort(), but it sorts an array in reverse order while maintaining the key-value associations. It sorts the array based on the value, but instead of sorting in ascending order, it sorts in descending order.
echo "==========arsort() function===========\n";
$ages = ["Alice" => 25, "Bob" => 30, "Charlie" => 20, "David" => 35];
arsort( $ages );
print_r( $ages );
foreach ( $ages as $key => $value ) {
    echo "$key = $value\n";
}

//?ksort(): This function is used to sort an array by the keys in ascending order. The original keys to values associations are maintained.
echo "==========ksort() function===========\n";
$fruits = ["apple" => 2, "orange" => 5, "banana" => 1, "grape" => 3];
ksort( $fruits );
print_r( $fruits );

//*krsort(): This function is used to sort an array by the keys in descending order. The original keys to values associations are maintained.
echo "==========krsort() function===========\n";
$fruits = ["apple" => 2, "orange" => 5, "banana" => 1, "grape" => 3];
krsort( $fruits );
print_r( $fruits );

//?usort(): Sorts an array using a user-defined comparison function.
echo "==========usort() function===========\n";

$fruits = ["apple" => 2, "orange" => 5, "banana" => 1, "grape" => 3];
function cmpm( $a, $b ) {
    if ( $a == $b ) {
        return 0;
    }
    return ( $a < $b ) ? -1 : 1;
}

usort( $fruits, "cmpm" );
print_r( $fruits );

//*uasort(): This function is used to sort an array by values using a user-defined comparison function. The original keys to values associations are maintained.
echo "==========uasort() function===========\n";
$fruits = ["apple" => 2, "orange" => 5, "banana" => 1, "grape" => 3];

function cmp( $a, $b ) {
    if ( $a == $b ) {
        return 0;
    }
    return ( $a < $b ) ? -1 : 1;
}

uasort( $fruits, "cmp" );
print_r( $fruits );

//?uksort(): This function sorts an array by keys using a user-defined comparison function.

$students = [
    "John"  => 95,
    "David" => 87,
    "Mary"  => 92,
    "Jane"  => 80,
];

// *Sort the array by keys in ascending order
function compareKeys( $a, $b ) {
    return strcmp( $a, $b );
}

uksort( $students, "compareKeys" );

print_r( $students );

//?natsort(): This function sorts an array using a "natural order" algorithm, which is similar to sorting alphabetically but takes into account numeric values.
$fruits = ["apple1", "orange10", "banana2", "apple2"];

// Sort the array using natural order
natsort( $fruits );

print_r( $fruits );

//*natcasesort(): This function sorts an array using a "natural order" algorithm, but it is case-insensitive.
$animals = ["Lion", "dog", "Elephant", "cat"];

// Sort the array using natural order and case-insensitive comparison
natcasesort( $animals );

print_r( $animals );

//?array_multisort(): This function sorts multiple arrays or multidimensional arrays at once, based on one or more of the arrays' values. It can also sort in ascending or descending order.
$students = [
    ["name" => "John", "age" => 20, "score" => 85],
    ["name" => "David", "age" => 18, "score" => 92],
    ["name" => "Mary", "age" => 19, "score" => 90],
    ["name" => "Jane", "age" => 21, "score" => 78],
];

// Sort the multidimensional array by score in descending order
$score = array_column( $students, "score" );

array_multisort( $score, SORT_DESC, $students );

print_r( $students );

//!Hasin Hayder sir
$fruits  = ['apple', 'banana', 'mango', 'plum', 'orange', 'strawberry'];
$numbers = [1, 2, 4, 3, 8, 6, 9, 45, 31, 35, 39, 13, 7];
sort( $fruits );
sort( $numbers );
print_r( $fruits );
print_r( $numbers );

$fruit = ['banana', 'mango', 'apple', 'f' => 'plum', 'orange', 'strawberry'];
//sort() function don't reserved any index key of an array
sort( $fruit );
print_r( $fruit );

//array string sort
$numbers = [1, 2, 4, 3, 8, 6, 9, 45, 31, 35, 39, 13, 7];
sort( $numbers, SORT_STRING );

//ASCI array sort
$random = ["apple", "Apple", "banana", "Banana", "Pineapple"];
sort( $random );
print_r( $random );

$random = ["apple", "Apple", "banana", "Banana", "Pineapple"];
sort( $random, SORT_STRING | SORT_FLAG_CASE );
print_r( $random );

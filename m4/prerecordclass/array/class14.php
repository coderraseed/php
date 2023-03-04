<?php 

//?in_array(): This function searches for a value in an array and returns true if the value is found, false otherwise.
$fruits = array("apple", "banana", "orange");
if (in_array("banana", $fruits)) {
    echo "Found banana in the array!";
} else {
    echo "Couldn't find banana in the array.";
}


//*array_search(): This function searches for a value in an array and returns its corresponding key/index if the value is found, false otherwise.
$fruits = array("apple", "banana", "orange");
$index = array_search("banana", $fruits);
if ($index !== false) {
    echo "Found banana at index $index!";
} else {
    echo "Couldn't find banana in the array.";
}


//?array_key_exists(): This function checks if a specified key exists in an array and returns true if the key is found, false otherwise.
$fruits = array("apple" => 2, "banana" => 1, "orange" => 3);
if (array_key_exists("banana", $fruits)) {
    echo "Found banana in the array!";
} else {
    echo "Couldn't find banana in the array.";
}

//*array_intersect(): This function returns an array containing all values that are present in two or more arrays.
$fruits1 = array("apple", "banana", "orange");
$fruits2 = array("banana", "kiwi", "pineapple");
$common_fruits = array_intersect($fruits1, $fruits2);
print_r($common_fruits);




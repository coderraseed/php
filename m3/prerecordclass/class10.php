<?php
//The spaceship operator

$x = 4;
$y = 7;

function greaterOrSmaller( $x, $y ) {
    if ( $x > $y ) {
        return 1;
    } elseif ( $x == $y ) {
        return 0;
    } else {
        return -1;
    }
}
if ( greaterOrSmaller( $x, $y ) == 1 ) {
    echo "{$x} is greater than {$y}";
} elseif ( greaterOrSmaller( $x, $y ) == 0 ) {
    echo "{$x} is equal to {$y}";
} elseif ( greaterOrSmaller( $x, $y ) == -1 ) {
    echo "{$x} is smaller than {$y}";
}
echo PHP_EOL;
/* 
The spaceship operator is a comparison operator in PHP that was introduced in version 7. It is represented by the symbol "<=>", which looks like a spaceship.

The spaceship operator is used to compare two expressions and returns one of three possible values: -1, 0, or 1. The value returned depends on the relationship between the two expressions being compared. Here's how it works:

If the value on the left is less than the value on the right, it returns -1.
If the values are equal, it returns 0.
If the value on the left is greater than the value on the right, it returns 1. 
*/
echo "=======TThe spaceship operator=========\n";
$result = $x<=>$y;
if ( $result == 1 ) {
    echo "{$x} is greater than {$y}";
} elseif ( $result == 0 ) {
    echo "{$x} is equal to {$y}";
} elseif ( $result == -1 ) {
    echo "{$x} is smaller than {$y}";
}
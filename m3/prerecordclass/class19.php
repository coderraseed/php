<?php

//recursive fibonacci series print
function printRecursive( $old, $new, $start, $end ) {
    if ( $start > $end ) {
        return;
    }
    $start++;
    echo $old . " ";
    $_temp = $old + $new;
    $old   = $new;
    $new   = $_temp;
    printRecursive( $old, $new, $start, $end );
}

printRecursive( 0, 1, 1, 10 );

echo PHP_EOL;

//man ke static kore deoa
function printFibonacci( $old, $new, $end ) {
    static $start;
    $start = $start ?? 1;
    if ( $start > $end ) {
        return;
    }
    $start++;
    echo $old . " ";
    $_temp = $old + $new;
    $old   = $new;
    $new   = $_temp;
    printFibonacci( $old, $new, $end );
}

printFibonacci( 0, 1, 11 );

echo PHP_EOL;

function fibonacci( $n ) {
    if ( $n == 0 ) {
        return 0;
    } elseif ( $n == 1 ) {
        return 1;
    } else {
        return fibonacci( $n - 1 ) + fibonacci( $n - 2 );
    }
}
for ( $i = 0; $i < 12; $i++ ) {
    echo fibonacci( $i ) . " ";
}
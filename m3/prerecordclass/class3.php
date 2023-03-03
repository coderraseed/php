<?php 
//for loop:
    echo "=======This is FOR loop=========\n";
    for ( $i = 10; $i > 0; $i-- ) {
        echo $i;
        echo PHP_EOL;
    }

    echo "=======This is FOR loop=========\n";
    for ( $i = 10; $i > 0; $i-=1 ) {
        echo $i;
        echo PHP_EOL;
    }

    echo "=======This is multi stepping FOR loop=========\n";
    for ( $i = 10; $i > 0; $i-=1 ) {
        echo $i . ":" .(10-$i);
        echo PHP_EOL;
    }
    echo "=======This is multi stepping FOR loop=========\n";
    for ( $i = 10; $i > 0; $i-=1 ) {
        echo $i . ":" .(10-$i+1);
        echo PHP_EOL;
    }
    echo "=======This is multi stepping FOR loop=========\n";
    for ( $i = 10; $i > 0; $i-=1 ) {
        echo $i . ":" .(11-$i);
        echo PHP_EOL;
    }
    echo "=======This is multi stepping FOR loop=========\n";
    for ( $i = 10, $j=0; $i > 0; $i-=1,$j++ ) {
        echo $i . ":" .$j;
        echo PHP_EOL;
    }
    echo "=======This is multi stepping FOR loop=========\n";
    for ( $i = 10, $j=1; $i > 0; $i-=1,$j++ ) {
        echo $i . ":" .$j;
        echo PHP_EOL;
    }
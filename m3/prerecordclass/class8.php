<?php

//for loop break statement:
echo "=======This is FOR break loop=========\n";
for ( $i = 0; $i < 10; $i++ ) {
    if ( $i == 5 ) {
        break;
    }
    echo $i;
    echo PHP_EOL;
}
echo "=======This is FOR break loop=========\n";
for ( $i = 0; $i < 10; $i++ ) {
    if ( $i == 5 ) {
        echo $i;
        echo PHP_EOL;
        break;
    }

}

echo "=======This is FOR break loop=========\n";
for ( $i = 20; $i < 50; $i++ ) {
    if ( $i % 13 == 0 ) {
        echo $i;
        echo PHP_EOL;
        break;
    }

}

//for loop continue statement
echo "=======This is FOR continue loop=========\n";
for ( $i = 0; $i < 10; $i++ ) {
    if ( $i == 5 ) {
        continue;
    }
    echo $i;
    echo PHP_EOL;
}

echo "=======This is FOR continue loop=========\n";
for ( $i = 0; $i < 10; $i++ ) {
    if ( $i < 5 ) {
        continue;
    }
    echo $i;
    echo PHP_EOL;
}
/* 
echo "=======This is FOR continue loop=========\n";
for ( $i = 0; $i < 10; $i++ ) {
    if ( $i == 5 ) {
        echo $i;
        echo PHP_EOL;
        continue;
    } 

}*/
<?php 
//Control structure

$n = 12;
if ( $n % 2 == 0 ) {
    echo "{$n} is an even number";
} else {
    echo "{$n} is an odd number ";
}

echo PHP_EOL;
echo "=============\n";
// Alternative syntax of previous code

if ( $n % 2 == 0 ):
    echo "{$n} is an even number";
    echo PHP_EOL;
else:
    echo "{$n} is an odd number";
    echo PHP_EOL;
endif;
echo PHP_EOL;


echo "=============\n";
// Alternative syntax of previous code

if ( $n % 2 == 0 ):
    ?>
This is an even number";
    
    <?php
else:
    ?>
This is an odd number";
    
    <?php
endif;
echo PHP_EOL;



echo "=============\n";
// Alternative syntax of previous code

if ( $n % 2 == 0 ){
    ?>
This is an even number";
    
    <?php
}else{
    ?>
This is an odd number";
    
    <?php
}


echo PHP_EOL;


echo "=============\n";
//In switch case
switch($n % 2 == 0 ):
    case 0:
        echo "{$n} is an even number";
        break;
    default:
        echo "{$n} is an odd number";
endswitch;
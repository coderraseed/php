<?php
//variable er man change able like
$a = 49;
$b = 25;
echo $a+$b ."\n";
echo "=============\n";
//now variable man change and out put change
$b=45;

echo $a+$b ."\n";
echo "=============\n";

// Constant declaration system constant and value could not change able
define("PI", 3.14159);
echo constant( 'PI' ), "\n";
echo "=============\n";

//$constant("PI") means constant('PI') function
$constant ="constant";
echo "value of PI= {$constant( 'PI' )}, \n";
echo "=============\n";

define( 'lwhh', "Learn With Hasin Hyder" );
define( 'lwrh', "Learn with Rabbil Hasan" );
//echo constant("lwhh");
$constant = "constant";
echo "If you want to learn php Pleas visit", constant( 'lwrh' ), "vai er website \n";
echo "=============\n";
echo "If you want to learn php Pleas visit {$constant( 'lwhh' )} vai er website \n";
echo "=============\n";

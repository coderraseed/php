<?php
/* $vegetables = "Carrot, Capsicum, Brinjal, Brocolli";
//explode(); //this function use to convert string to array
$vegetable = explode(', ', $vegetables);
var_dump($vegetable);
echo PHP_EOL;
//array to string converter
$vegetableString = join(', ', $vegetable);
echo $vegetableString;
echo PHP_EOL; */
//echo count($vegetable);
//jadi pasha pashi string a koma na thake ba koma ase but sobguli te nai ai jonno nicher function ti use korte hobe
//$vege_tables = "Carrot, Capsicum, Brinjal, Brocolli,potato, sweet-potato";


$vege_tables =preg_split('/(, |,)/' , "Carrot, Capsicum, Brinjal, Brocolli,potato, sweet-potato");
//$stringToarray = preg_split('/(, |,)/' , $stringToarray);
echo var_dump($vege_tables);


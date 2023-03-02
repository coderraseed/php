<?php
//echo function
echo "Assalamu alaikum \n";

//01 Feb 2023
//variable declaration
$name = "Name";
$firstName = "Md Rasedul";
$lastName = "Islam";
$age    = 32;
$country = "banglades";
$profession = "PHP & Laravel Trainee";

echo "$name: $firstName $lastName \n";
echo "Age: $age \n";
echo "Country Name: $country \n";
echo "Profession: $profession \n";

// Another way to declaration of Variable
$a = 10;
$b = 21;

$c ="a";

echo $b+$$c . "\n";
echo "=============\n";
//This is another way to echo of variable

$hello =   "Bangladesh";
$bangla = "This is my mother land.";

//If we concat two variable there are two way
echo "I love ".$hello." ". $bangla."\n";
echo "=============\n";
echo "I love {$hello}, {$bangla} \n";



/* $x="U.P";  
$$x="Lucknow";  
echo $x. "<br>";  
echo $$x. "<br>";  
echo "Capital of $x is " . $$x;  */
$m='Rashed';
$n="m";
echo $$n ."\n";


?>

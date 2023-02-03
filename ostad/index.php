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

    //This is another way to echo of variable

    $hello =   "Bangladesh";
    $bangla = "This is my mother land.";

    echo "I love {$hello}, {$bangla} \n";
    
    // Constant declaration system
    define ('pi', 2455);
    echo constant('pi') , "\n";

    define('lwhh', "Learn With Hasin Hyder");
    define('lwrh', "Learn with Rabbil Hasan");
    //echo constant("lwhh");
    $constant = "constant";
    echo "If you want to learn php Pleas visit" , constant('lwrh') , "vai er website \n";
    echo "If you want to learn php Pleas visit {$constant('lwhh')} vai er website \n";

    // Use of var_dump() function
    
    $mango = "Mango = I like to eat mango";
    $lichi = 20;
    $money = 12.15;
    $taka =4.5555555555000055555555555000000000000555;
    $true = true;


    print gettype($taka) ."\n";


    var_dump($mango, $lichi, $money, $taka, $true) . "\n";


    /* $x="U.P";  
    $$x="Lucknow";  
    echo $x. "<br>";  
    echo $$x. "<br>";  
    echo "Capital of $x is " . $$x;  */

?>
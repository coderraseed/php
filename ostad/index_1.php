<?php 
    /*  Data types
    integer (there is no unsigned integer in PHP language)
    string
    float
    boolean
    null
    variable
    array
    object
    resource
    */
    $name = "Earth";

    echo "We're live on $name \n";

    echo "We're live on {$name} \n";
 
    // back \ using means this is scaping. I am using single cottesion so use back \
    echo 'We\'re live on ', $name ,"\n";


    //use of printf()
    $fname = "Earth";
    $uname = strtoupper($fname);
    echo "We're live on {$uname} \n";
    printf( "We're live on %s \n",$fname);
    printf( "We're live on %s \n",$uname);


    $namef = "Rasedul";
    $lname = "Islam";

        printf("My %s name is %s %s \n", "full", $namef, $lname);

    echo "I love my country.
        The of my country is bangladesh.
        Bangladesh in a riverine country. \n";
    
    $planet = "Sun";
    $planet1 = "Uretus";

    echo "The smallest planet is ".$planet ." and the biggest planet is ".$planet1 ."\n";
    echo "The smallest planet is {$planet} and the biggest planet is {$planet1} \n";
    printf ("The smallest planet is %s and the biggest planet is %s\n", $planet, $planet1);
    printf ("The smallest planet is %s and the biggest planet is %s\n", strtoupper($planet), strtolower($planet1));


    

?>
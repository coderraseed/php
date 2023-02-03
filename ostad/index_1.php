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

    

?>
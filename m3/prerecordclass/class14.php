<?php 
function foodServeRobot($foodType, $numberOfItem ){
    printf("%s of %s have been served", $numberOfItem, $foodType);
}
foodServeRobot("Coffee", 8);

echo PHP_EOL;

//default parameter pass
function foodServe($foodType="Coffee", $numberOfItem= 2 ){
    printf("%s of %s have been served", $numberOfItem, $foodType);
}

foodServe("Drink");
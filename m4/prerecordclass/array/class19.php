<?php


$makeArray=[];
for ($i=12; $i < 21; $i++) { 
    array_push($makeArray, $i);
}
print_r($makeArray);

//*The range() function is used to create an array containing a range of elements. It takes three arguments: the starting value, the ending value, and the step value. The starting and ending values define the range of the array, while the step value defines the increment or decrement between each element.
echo "\n=========New array===========\n";

$makeNewArray= range(12,20);
print_r($makeNewArray);

echo "\n=========New array===========\n";

$makeNewArray= range(12,20,2);
print_r($makeNewArray);

echo "\n=========New array===========\n";

$makeEvenArray= range(0,50,7);
foreach ($makeEvenArray as $evennumber) {
    if($evennumber>0){
        echo $evennumber. "\n";
    }
}
echo "\n=========New array===========\n";

$makeEvenArray= range(1,50);
foreach ($makeEvenArray as $evennumber) {
    if($evennumber%2==0){
        echo $evennumber. "\n";
    }
}

//print_r($makeEvenArray);

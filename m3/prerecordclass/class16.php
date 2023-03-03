<?php 
//Unlimited value pass accept
function sum(...$n):int{
    $result = 0;
    for ($i=0; $i<count($n); $i++){
        $result +=$n[$i];
    }
    return $result;
}
echo sum(2,3,4,6);
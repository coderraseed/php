<?php

/* function namota($n=1){
   for ($i=1; $i <= 10; $i++) {
            echo  $i. "*" . $n ."=" .$n*$i;
            echo PHP_EOL;
    }
}
echo namota(10);
 */
function custom_sort_array($arr) {
    $n = count($arr);
    for($i = 0; $i < $n; $i++) {
        for($j = 0; $j < $n - $i - 1; $j++) {
            if($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}
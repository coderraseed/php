<?php
$string = "hello@world";
$niddle = "h";
$is_w_present = strpos($string, $niddle);
if ($is_w_present!==false) {
    echo "We find the niddle {$niddle}";
}else{
    echo "we did not find any niddle {$niddle}";
}
echo PHP_EOL;
if ($is_w_present) {
    echo "We find the niddle {$niddle}";
}else{
    echo "we did not find any niddle {$niddle}";
}


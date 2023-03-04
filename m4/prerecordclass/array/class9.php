<?php 
//Empty value checked by php function
$n = 1; //values are "'',0,any name, true, false etc"
if (isset($name)) {
    echo "Name is set";
}else{
    echo"Name is not set";
}
echo PHP_EOL;

if (empty($name)) {
    echo "Name is empty";
}else{
    echo"Name is not empty";
}
echo PHP_EOL;

if (isset($name)&& (is_numeric($n) || $n != '')) {
    echo "Name is set and it's not empty";
}else{
    echo"Name is not set or it's empty";
}
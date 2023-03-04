<?php 
$fruit1 = ['apple', 'banana', 'mango', 'plum', 'orange', 'strawberry'];
$fruit2 = ['apple', 'malta', 'mango', 'lemon', 'orange', 'pear'];

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];



//?list() is a special function in PHP that allows you to assign values to a list of variables in a single operation. It is often used to assign values from an array to separate variables.


list($a, $b, $c,$d,$e,$f,$g,$h) = $numbers;
echo $a ."\n"; // output: 1
echo $b."\n"; // output: 2
echo $c."\n"; // output: 3
echo $d."\n"; // output: 3
echo $e."\n"; // output: 3
echo $f."\n"; // output: 3
echo $g."\n"; // output: 3
echo $h."\n"; // output: 3
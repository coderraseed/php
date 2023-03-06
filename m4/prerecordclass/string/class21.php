<?php
//!In PHP, a string is a sequence of characters that is used to represent textual data. A string can contain letters, numbers, symbols, and even whitespace. In PHP, strings are defined using double quotes or single quotes.


$name = "Rashed";

$string = "My name is $name\n";
echo $string;
$string = "My name is $name\n\t new date\n";
echo $string;

//This name is now doc because using single quotation
$nowDoc = <<<'EOD'
My name
is {$name}
I read 
PHP,
laravel &
wordpress
EOD;

echo $nowDoc;

echo "\n============this is now doc============\n";

$hearDoc = <<<EOD
My name
is {$name}
I read 
PHP,
laravel &
wordpress
EOD;


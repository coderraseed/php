<?php 
/*Operator Precedence

The precedence of an operator specifies how "tightly" it binds two expressions together. For example, in the expression 1 + 5 * 3, the answer is 16 and not 18 because the multiplication ("*") operator has a higher precedence than the addition ("+") operator. Parentheses may be used to force precedence, if necessary. For instance: (1 + 5) * 3 evaluates to 18.

When operators have equal precedence their associativity decides how the operators are grouped. For example "-" is left-associative, so 1 - 2 - 3 is grouped as (1 - 2) - 3 and evaluates to -4. "=" on the other hand is right-associative, so $a = $b = $c is grouped as $a = ($b = $c).
 */

$f=false || true;
$e = false or true;
var_dump($f, $e);

echo PHP_EOL;

$g=true && false;
$h = true and false;
var_dump($g, $h);
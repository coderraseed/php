<?php 
//Different types of numbering system

//Hexadecimal Number means 0~9 and A~F
$h=0x2A24F;
printf("This is a hexadecimal number %X = %d decimal number \n", $h, $h );
//decimal number
$n = 12; 
printf("This is a decimal number %d = %b binary number \n", $n, $n );
//Octal number means 0~7
$o= 012;
printf("This is a hexadecimal number %s = %d decimal number \n", $o, $o );

//Binary Number means 1&0
$b ="010101";
$d=bindec($b);
printf("This is a binary number %s = %d decimal number \n", $b, $d );

// - Hexadecimal to decimal
echo dechex(47). "\n";
// -  Decimal to Hexadecimal
echo hexdec("2F"). "\n";
// -  Decimal to binary
echo decbin(47). "\n";
// -  Binary to Decimal
echo bindec("101111"). "\n";
// -  Decimal to Octal
echo decoct(947). "\n";
// - Octal  to Decimal
echo octdec("1663"). "\n";



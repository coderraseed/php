<?php
//!=========ASCII=============
//?ASCII stands for American Standard Code for Information Interchange. It is a widely used character encoding standard that assigns unique numerical codes to represent characters and symbols in computers and other electronic devices.

//?The ASCII standard defines a set of 128 characters, including letters, numbers, punctuation marks, and control codes. Each character is assigned a unique 7-bit binary code, which means that there are 128 possible values that can be represented.

$ascii_code = 65;
$character  = chr( $ascii_code );
echo $character . "\n"; // Output: A

$character  = 'C';
$ascii_code = ord( $character );
echo $ascii_code . "\n"; // Output: 67
//===================================
$ascii_code         = 65;
$hex_representation = bin2hex( chr( $ascii_code ) );
echo $hex_representation . "\n"; // Output: 41

$hex_representation = "41";
$character          = hex2bin( $hex_representation );
echo $character . "\n"; // Output: A

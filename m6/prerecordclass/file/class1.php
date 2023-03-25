<?php
//echo getcwd();

//============Step 1===================
$file_path= __DIR__."text.txt";

$fr=fopen($file_path, 'r');
$line = fgets($fr);
echo $line;
fclose($fr);

/* 
//============Step 1===================
$file_path= "/xampp/htdocs/php/m6/prerecordclass/file/text.txt";

$fr=fopen($file_path, 'r');
$line = fgets($fr);
echo $line;
fclose($fr);

 */


<?php

$file_path= "/xampp/htdocs/php/m6/prerecordclass/file/text.txt";

$fr=fopen($file_path, 'r');
$line = fgets($fr);
echo $line;
fclose($fr);
<?php 
//File generated code
for ($i = 1; $i <= 20; $i++) {
    $file = 'class'.$i.'.php';
    $handle = fopen($file, 'w');
    fwrite($handle, '<?php ');
    fclose($handle);
    echo 'File '.$file.' created.<br>';
}

//file generated specific folder
/* $foldrName = '/m2/prerecordclass';
for ($i = 1; $i <= 5; $i++) {
    $file = 'class'.$i.'.php';
    $handle = fopen($file, 'w');
    fwrite($handle, 'This is file '.$i);
    fclose($handle);
    echo 'File '.$file.' created.<br>';
}
 */

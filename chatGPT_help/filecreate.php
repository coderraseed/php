<?php 
//File generated code
for ($i = 1; $i <= 5; $i++) {
    $file = 'class'.$i.'.php';
    $handle = fopen($file, 'w');
    fwrite($handle, 'This is file '.$i);
    fclose($handle);
    echo 'File '.$file.' created.<br>';
}

//file generated specific folder
/* $foldrName = '/m3/prerecordclass';
for ($i = 1; $i <= 5; $i++) {
    $file = $foldrName . 'class'.$i.'.php';
    $handle = fopen($file, 'w');
    fwrite($handle, 'This is file '.$i);
    fclose($handle);
    echo 'File '.$file.' created.<br>';
}
 */
/* $folder_path = 'php/m1/prerecordclass'; // specify the folder path here
for ($i = 1; $i <= 10; $i++) {
    if (!is_dir($folder_path)) {
        mkdir($folder_path, 0777, true);
        $filename = 'file'.$i.'.txt';
        $handle = fopen($filename, 'w');
        fwrite($handle, 'This is file '.$i);
        fclose($handle);
        echo 'File '.$filename.' created.<br>';
    }
} */

<?php

/* ------------------ File handling ---------------- */

/**
 * File handling is the ability to read and write files on the server.
 * PHP has built in functions for reading and writing files.
 */

$file = 'extras/users';

if (file_exists($file)) {
    // echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Adney' . PHP_EOL . 'Aldo' . PHP_EOL . 'Aleyn' . PHP_EOL . 'Alford' . PHP_EOL . 'Amherst';
    fwrite($handle, $contents);
    fclose($handle);
}
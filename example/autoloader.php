<?php

spl_autoload_register(function ($class) {
    $filePath = str_replace(['App', '\\'], ['src', DIRECTORY_SEPARATOR], $class);
    $filePath = DIRECTORY_SEPARATOR
        . 'app'
        . DIRECTORY_SEPARATOR
        . $filePath
        . '.php';

    require_once $filePath;
});

if (false === function_exists('dump')) {
    function dump($data) {
        print_r($data);
        echo "\n";
    }
}
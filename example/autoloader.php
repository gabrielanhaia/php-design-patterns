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
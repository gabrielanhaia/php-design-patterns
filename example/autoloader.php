<?php

spl_autoload_register(function ($class) {
    $filePath = str_replace(['App\\', '\\'], ['src' . DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR], $class);
    $filePath = DIRECTORY_SEPARATOR
        . 'app'
        . DIRECTORY_SEPARATOR
        . $filePath
        . '.php';

    require_once $filePath;
});

if (false === function_exists('dump')) {
    function dump($data)
    {
        lns();
        ln();
        print_r($data);
        ln();
        lns();
        ln();
        ln();
    }
}

if (false === function_exists('dd')) {
    function dd($data) {
        dump($data);
        die;
    }
};

if (false === function_exists('ln')) {
    function ln()
    {
        echo "\n";
    }
}

if (false === function_exists('lns')) {
    function lns()
    {
        echo '---------------------------------';
    }
}
<?php

declare(strict_types=1);

namespace App\Facade\Component;

/**
 * Class BarCodeUtil
 * @package App\Facade\Component
 */
class BarCodeUtil
{
    /**
     * This function was created on this way to show a very common case found in legacy projects where we have a "Util" class
     * with loads of static functions.
     */
    public static function generateBarCode()
    {
        /**
         * This is just an example. It's not a real barcode as you can see.
         */
        return rand(1000000000000, 9000000000000);
    }
}
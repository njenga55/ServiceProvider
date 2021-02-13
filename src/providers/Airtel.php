<?php

namespace Njenga55\ServiceProvider\providers;

class Airtel
{
    protected static $firstLevelPrefix = [
        8,
    ];

    protected static $secondLevelPrefix = [
        30 , 31 , 32 , 33 , 34 , 35 , 36 , 37 , 38 , 39,
        50, 51 , 52 , 53 , 54 , 55, 56, 62,
    ];

    /**
     * Checkprovider
     *
     * @param string $phoneNumber
     *
     * @return bool
     */
    public static function isProvider($phoneNumber): bool
    {
        $startingCharcters = substr($phoneNumber, 1, 2);

        if (in_array(substr($startingCharcters, 0, 1), self::$firstLevelPrefix)) {
            return true;
        }

        if (in_array($startingCharcters, self::$secondLevelPrefix)) {
            return true;
        }

        return false;
    }
}

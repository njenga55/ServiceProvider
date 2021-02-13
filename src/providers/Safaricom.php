<?php

namespace Njenga55\ServiceProvider\providers;

class Safaricom
{
    protected static $firstLevelPrefix = [
        0, 1, 2, 4, 9
    ];

    protected static $secondLevelPrefix = [
        57, 58, 59, 68, 69,
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

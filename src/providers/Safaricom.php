<?php

namespace Njenga55\ServiceProvider\providers;

class Safaricom
{
    protected static $firstLevelPrefix = [
        70, 71, 72, 74, 79, 11
    ];

    protected static $secondLevelPrefix = [
        757, 758, 59, 768, 769,
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
        $startingCharcters = substr($phoneNumber, 0, 3);

        if (in_array(substr($startingCharcters, 0, 2), self::$firstLevelPrefix)) {
            return true;
        }

        if (in_array($startingCharcters, self::$secondLevelPrefix)) {
            return true;
        }

        return false;
    }
}

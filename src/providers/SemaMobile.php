<?php

namespace Njenga55\ServiceProvider\providers;

class SemaMobile
{
    protected static $firstLevelPrefix = [];

    protected static $secondLevelPrefix = [
        67,
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
        $startingCharcters =  substr($phoneNumber, 0, 2);

        if (in_array($startingCharcters, self::$secondLevelPrefix)) {
            return true;
        }

        return false;
    }
}

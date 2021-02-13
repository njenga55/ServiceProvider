<?php

namespace Njenga55\ServiceProvider\providers;

class Equitel
{
    protected static $firstLevelPrefix = [];

    protected static $secondLevelPrefix = [
        63, 64, 65, 66
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
        $startingCharcters =  substr($phoneNumber, 1, 2);

        if (in_array($startingCharcters, self::$secondLevelPrefix)) {
            return true;
        }

        return false;
    }
}

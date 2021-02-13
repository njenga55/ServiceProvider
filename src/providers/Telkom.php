<?php

namespace Njenga55\ServiceProvider\providers;

class Telkom
{
    /**
     * Service provider owns the while set of number from on the integer range.
     *
     * @var array
     */
    protected static $firstLevelPrefix = [
        7,
    ];

    /**
     * Service provider owns partial the first set of numbers.
     *
     * @var array
     */
    protected static $secondLevelPrefix = [
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

        return false;
    }
}

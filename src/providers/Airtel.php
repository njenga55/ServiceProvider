<?php

namespace Njenga55\ServiceProvider\providers;

class Airtel
{
    protected static $firstLevelPrefix = [
        78, 10,
    ];

    protected static $secondLevelPrefix = [
        730, 731, 732 , 733, 734, 735, 736, 737, 738, 739,
        750, 751, 752, 753, 754, 755, 756, 762,
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

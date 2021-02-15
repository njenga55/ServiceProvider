<?php

namespace Njenga55\ServiceProvider\Facades;

use Illuminate\Support\Facades\Facade;
use Njenga55\ServiceProvider\MobileProvider as ServiceProviderMobileProvider;

class MobileProvider extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ServiceProviderMobileProvider::class;
    }
}

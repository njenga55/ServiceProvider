<?php

namespace Njenga55\ServiceProvider;

use Illuminate\Support\ServiceProvider;

class MobileServiceProvider extends ServiceProvider
{
    /**
     * Register a class in the service container
     */
    public function regiter()
    {
        $this->app->bind('mobile_provider', function ($app) {
            return new MobileProvider();
        });
    }
}

<?php

namespace Njenga55\ServiceProvider\tests;

use Njenga55\ServiceProvider\Exceptions\InvalidPhoneNumberException;
use Njenga55\ServiceProvider\Facades\MobileProvider;
use Orchestra\Testbench\TestCase;

class MobileNumberTest extends TestCase
{
    public function getPackageAliases($app)
    {
        return [
            'MobileProvider' => MobileProvider::class
        ];
    }

    /*test*/
    public function testOnlyValidNumbersAreAccepted()
    {
        $phone = '072383N186';
        $this->expectException(InvalidPhoneNumberException::class);
        MobileProvider::getProvider($phone);

        $phone = '072383+*186';
        $this->expectException(InvalidPhoneNumberException::class);
        MobileProvider::getProvider($phone);
    }

    /*tests*/
    public function testProviderIsSafaricom()
    {
        $phone = '0723835186';
        $this->assertEquals(
            'Safaricom',
            MobileProvider::getProvider($phone)
        );
        $phone = '0113835186';
        $this->assertEquals(
            'Safaricom',
            MobileProvider::getProvider($phone)
        );
    }

    /*tests*/
    public function testProviderIsAirtel()
    {
        $phone = '0733835186';
        $this->assertEquals(
            'Airtel',
            MobileProvider::getProvider($phone)
        );
        $phone = '0103835186';
        $this->assertEquals(
            'Airtel',
            MobileProvider::getProvider($phone)
        );
    }

    /*tests*/
    public function testProviderIsTelkom()
    {
        $phone = '0773835186';
        $this->assertEquals(
            'Telkom',
            MobileProvider::getProvider($phone)
        );
    }

    /*tests*/
    public function testProviderIsEquitel()
    {
        $phone = '0764835186';
        $this->assertEquals(
            'Equitel',
            MobileProvider::getProvider($phone)
        );
    }

    /*tests*/
    public function testProviderIsMobilePay()
    {
        $phone = '0760835186';
        $this->assertEquals(
            'Mobile Pay',
            MobileProvider::getProvider($phone)
        );
    }

    /*tests*/
    public function testProviderIsEferio()
    {
        $phone = '0761835186';
        $this->assertEquals(
            'Eferio',
            MobileProvider::getProvider($phone)
        );
    }
}

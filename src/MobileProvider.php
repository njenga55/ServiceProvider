<?php

namespace Njenga55\ServiceProvider;

use Njenga55\ServiceProvider\Exceptions\InvalidPhoneNumberException;
use Njenga55\ServiceProvider\providers\Airtel;
use Njenga55\ServiceProvider\providers\Eferio;
use Njenga55\ServiceProvider\providers\Equitel;
use Njenga55\ServiceProvider\providers\MobilePay;
use Njenga55\ServiceProvider\providers\Safaricom;
use Njenga55\ServiceProvider\providers\SemaMobile;
use Njenga55\ServiceProvider\providers\Telkom;

class MobileProvider
{
    /**
     * The number we testing
     *
     * @var string
     */
    public $phoneNumber;

    public function getProvider($phoneNumber)
    {
        $this->validatePhoneNumber($phoneNumber);

        return $this->getServiceProvider();
    }

    /**
     * Validate that is a number
     *
     * @param  $phoneNumber
     *
     * @return void
     */
    private function validatePhoneNumber($phoneNumber): void
    {
        $number = substr($phoneNumber, -9);
        preg_match('/[7]\d{8}/', $number, $matches);
        if (count($matches) !== 1) {
            throw new InvalidPhoneNumberException;
        }

        $this->phoneNumber = $number;
    }

    /**
     * Get the mobile provider
     *
     * @return string
     */
    private function getServiceProvider(): ?string
    {
        if (Safaricom::isProvider($this->phoneNumber)) {
            return 'Safaricom';
        }

        if (Airtel::isProvider($this->phoneNumber)) {
            return 'Airtel';
        }

        if (Telkom::isProvider($this->phoneNumber)) {
            return 'Telkom';
        }

        if (Equitel::isProvider($this->phoneNumber)) {
            return 'Equitel';
        }

        if (SemaMobile::isProvider($this->phoneNumber)) {
            return 'Sema Mobile';
        }

        if (MobilePay::isProvider($this->phoneNumber)) {
            return 'Mobile Pay';
        }
        if (Eferio::isProvider($this->phoneNumber)) {
            return 'Eferio';
        }

        return null;
    }
}

# Get Mobile Provider

This package is intended to help developers operating in the Kenyan space to identify mobile specific service providers in order to run specific provider operations, e.g., Requesting or sending money to a mobile provider via a specific service provider API or even sending SMS via specific gateway.

### installation:
installation via composer.

```php
  composer require njenga55/service-provider
```

### Usage:
Laravel
```php
  use Njenga55\ServiceProvider\Facades\MobileProvider;

  MobileProvider::getProvider($phoneNumber)
```
This will return either of the folowing providers and **`null`** if none is found.
- Safaricom
- Airtel
- Equitel
- Eferio
- Mobile Pay
- Sema Mobile
- Telkom

### Licence:
MIT

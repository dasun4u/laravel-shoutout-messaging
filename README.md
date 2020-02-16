# Laravel Shoutout Messaging (Laravel 5.5+)
Shoutout messaging library for Laravel
* [Laravel](https://laravel.com) PHP framework
* [Shoutout](https://getshoutout.com) Messaging

## Requirements

* PHP 5.6+
* Laravel 5.5+
## Installation

* Install the package by running this command in your terminal/cmd:
```
composer require dasun4u/laravel-shoutout-messaging
```

* Import config file by running this command in your terminal/cmd: and change the configs accordingly
```
php artisan vendor:publish --provider="Dasun4u\LaravelShoutoutMessaging\ShoutoutServiceProvider
```

* Send SMS
```php
use Dasun4u\LaravelShoutoutMessaging\Shoutout;

$shoutout = new Shoutout();
$destinations = ["+94764429394"]; // Add as array
$content = "Test SMS";
$send_sms = $shoutout->sendSMS($destinations, $content);
```

* Send Email
```php
use Dasun4u\LaravelShoutoutMessaging\Shoutout;

$shoutout = new Shoutout();
$destinations = ["test@test.com"]; // Add as array
$subject = "Test Subject";
$content = "<h1>Test html content</h1>";
$send_sms = $shoutout->sendEmail($destinations, $subject, $content);
```

## Author

* [**Dasun Dissanayake**](https://github.com/dasun4u)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

## Special Thanks to

* [Laravel](https://laravel.com) Community
![image3](https://user-images.githubusercontent.com/15827995/75132975-edd40b00-56fe-11ea-8811-7e6f3f13a450.jpg)

# Laravel Shoutout Messaging
Shoutout messaging library for Laravel

[![Latest Stable Version](https://poser.pugx.org/dasun4u/laravel-shoutout-messaging/v/stable)](https://packagist.org/packages/dasun4u/laravel-shoutout-messaging)
[![Total Downloads](https://poser.pugx.org/dasun4u/laravel-shoutout-messaging/downloads)](https://packagist.org/packages/dasun4u/laravel-shoutout-messaging)
[![License](https://poser.pugx.org/dasun4u/laravel-shoutout-messaging/license)](https://packagist.org/packages/dasun4u/laravel-shoutout-messaging)
[![StyleCI](https://github.styleci.io/repos/240946426/shield?branch=master)](https://github.styleci.io/repos/240946426)

* [Laravel](https://laravel.com) PHP framework
* [Shoutout](https://getshoutout.com) Messaging

## Requirements

* PHP 5.6+
* Laravel 8.0+
## Installation

* Install the package by running this command in your terminal/cmd:
```
composer require dasun4u/laravel-shoutout-messaging
```

* Import config file by running this command in your terminal/cmd and change the configs accordingly
```
php artisan vendor:publish --provider="Dasun4u\LaravelShoutoutMessaging\ShoutoutServiceProvider"
```

* Change the imported config file (`config/shoutout_message.php`) accordingly
```php
'api_key' => 'XXXXXXXXX.XXXXXXXXX.XXXXXXXXX',
'sms_source' => 'ShoutDEMO',
'email_source' => 'ShoutDEMO <shoutdemo@getshoutout.com>',
```

* Send SMS
```php
use Dasun4u\LaravelShoutoutMessaging\Shoutout;

$shoutout = new Shoutout();
$destinations = ["+94712345678"]; // Multiple numbers can add as array
$content = "Test SMS";
$response = $shoutout->sendSMS($destinations, $content);
```

* Send Email
```php
use Dasun4u\LaravelShoutoutMessaging\Shoutout;

$shoutout = new Shoutout();
$destinations = ["test@test.com"]; // Multiple numbers can add as array
$subject = "Test Subject";
$content = "<h1>Test html content</h1>"; // Html body
$response = $shoutout->sendEmail($destinations, $subject, $content);
```

* Get Response Data
```php
$response_body = $response->getBody(); // Get response
$response_body = json_decode($response->getBody(), true); // Get response as associative array
$response_status_code = $response->getStatusCode(); // Get status code
```

## Author

* [**Dasun Dissanayake**](https://github.com/dasun4u)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

## Special Thanks to

* [Laravel](https://laravel.com) Community
* [Shoutout](https://getshoutout.com)

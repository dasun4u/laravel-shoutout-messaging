# Laravel Shoutout Messaging
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

* Import config file by running this command in your terminal/cmd and change the configs accordingly
```
php artisan vendor:publish --provider="Dasun4u\LaravelShoutoutMessaging\ShoutoutServiceProvider
```

* Send SMS
```php
use Dasun4u\LaravelShoutoutMessaging\Shoutout;

$shoutout = new Shoutout();
$destinations = ["+94764429394"]; // Multiple numbers can add as array
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

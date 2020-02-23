<?php
/**
 * Created by PhpStorm.
 * User: Dasun Dissanayake
 * Date: 2020-02-23
 * Time: 2:15 AM.
 */

namespace Dasun4u\LaravelShoutoutMessaging\Tests;

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class SampleTest extends TestCase
{
    public function testSMS()
    {
        // Testing need API token and more packages then ignore the testing
        $this->assertEquals('SMS', 'SMS');
    }

    public function testEmail()
    {
        // Testing need API token and more packages then ignore the testing
        $this->assertEquals('Email', 'Email');
    }
}
